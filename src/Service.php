<?php
namespace CH;

final class Service
{
    const API_ENDPOINT = 'https://api.companieshouse.gov.uk';

    private $apiKey = null;

    /**
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param string $endpoint
     * @param array $payload
     * @return mixed Should be an array, but json_decode can return all sorts
     * @throws \Exception
     */
    public function send(string $endpoint, array $payload = []) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getRequestUrl($endpoint, $payload));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $this->apiKey . ':');
        $result = curl_exec($ch);
        curl_close($ch);
        if ($result === false) {
            throw new \Exception("cURL error: ".curl_error($ch));
        }
        $info = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        if ($info === 429) {
            throw new \Exception("Too many requests within 5 minute period. Capped at 600.");
        }
        $json = json_decode($result, true);
        if ($json === null) {
            throw new \Exception("Json Decode error: ".json_last_error_msg());
        }
        return $json;
    }

    /**
     * @param string $endpoint
     * @param array  $payload
     *
     * @return string
     */
    private function getRequestUrl(string $endpoint, array $payload)
    {
        $payload = array_merge($payload, ['ts' => time()]);
        $qs = '?' . http_build_query($payload);

        return static::API_ENDPOINT . $endpoint . $qs;
    }
}