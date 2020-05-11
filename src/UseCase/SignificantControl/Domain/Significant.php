<?php
namespace CH\UseCase\SignificantControl\Domain;

class Significant
{
    /**
     * @var string[]
     */
    private $naturesOfControl;
    /**
     * @var array<string, string>
     */
    private $links;
    /**
     * @var string
     */
    private $notifiedOn;
    /**
     * @var string
     */
    private $name;
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
    private $ceasedOn;
    /**
     * @var Address
     */
    private $address;

    public function __construct(array $jsonResponse)
    {
        $this->address = new Address($jsonResponse['address']);
        $this->ceasedOn = $jsonResponse['ceased_on'];
        $this->etag = $jsonResponse['etag'];
        $this->kind = $jsonResponse['kind'];
        $this->links = $jsonResponse['links'];
        $this->name = $jsonResponse['name'];
        $this->naturesOfControl = $jsonResponse['natures_of_control'];
        $this->notifiedOn = $jsonResponse['notified_on'];
    }

    /**
     * @return string[]
     */
    public function getNaturesOfControl(): array
    {
        return $this->naturesOfControl;
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
    public function getNotifiedOn(): string
    {
        return $this->notifiedOn;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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
    public function getCeasedOn(): string
    {
        return $this->ceasedOn;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }
}