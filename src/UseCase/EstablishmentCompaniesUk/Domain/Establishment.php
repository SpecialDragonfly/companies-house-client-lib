<?php
namespace CH\UseCase\EstablishmentCompaniesUk\Domain;

class Establishment
{
    /**
     * @var string
     */
    private $companyName;
    /**
     * @var string
     */
    private $companyNumber;
    /**
     * @var string
     */
    private $companyStatus;
    /**
     * @var array
     */
    private $links;
    /**
     * @var string
     */
    private $locality;

    /**
     * Establishment constructor.
     * @param string $companyName
     * @param string $companyNumber
     * @param string $companyStatus
     * @param array $links
     * @param string $locality
     */
    public function __construct(string $companyName, string $companyNumber, string $companyStatus, array $links, string $locality)
    {
        $this->companyName = $companyName;
        $this->companyNumber = $companyNumber;
        $this->companyStatus = $companyStatus;
        $this->links = $links;
        $this->locality = $locality;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @return string
     */
    public function getCompanyNumber(): string
    {
        return $this->companyNumber;
    }

    /**
     * @return string
     */
    public function getCompanyStatus(): string
    {
        return $this->companyStatus;
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
    public function getLocality(): string
    {
        return $this->locality;
    }
}