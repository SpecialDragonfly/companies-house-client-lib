<?php
namespace CH\UseCase\SignificantControl\Domain;

class SuperSecure
{
    /**
     * @var array<string, string>
     */
    private $links;
    /**
     * @var string
     */
    private $kind;
    /**
     * @var string
     */
    private $etag;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $ceased;

    public function __construct(array $jsonResponse)
    {
        $this->ceased = $jsonResponse['ceased'];
        $this->description = $jsonResponse['description'];
        $this->etag = $jsonResponse['etag'];
        $this->kind = $jsonResponse['kind'];
        $this->links = $jsonResponse['links'];
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @return string
     */
    public function getEtag(): string
    {
        return $this->etag;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getCeased(): string
    {
        return $this->ceased;
    }
}