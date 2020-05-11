<?php

namespace CH\UseCase\Search\Domain;

class CompanySearchItem extends SearchItem
{
    /**
     * @var string
     */
    private $companyNumber;
    /**
     * @var string
     */
    private $companyStatus;
    /**
     * @var string
     */
    private $companyType;
    /**
     * @var string
     */
    private $dateOfCessation;
    /**
     * @var string
     */
    private $dateOfCreation;
    /**
     * @var string
     */
    private $externalRegistrationNumber;

    /**
     * CompanySearchItem constructor.
     * @param array $jsonResponse
     */
    public function __construct(array $jsonResponse)
    {
        $this->companyNumber = $jsonResponse['company_number'];
        $this->companyStatus = $jsonResponse['company_status'];
        $this->companyType = $jsonResponse['company_type'];
        $this->dateOfCessation = $jsonResponse['date_of_cessation'];
        $this->dateOfCreation = $jsonResponse['date_of_creation'];
        $this->externalRegistrationNumber = $jsonResponse['external_registration_number'];
        parent::__construct($jsonResponse);
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
     * @return string
     */
    public function getCompanyType(): string
    {
        return $this->companyType;
    }

    /**
     * @return string
     */
    public function getDateOfCessation(): string
    {
        return $this->dateOfCessation;
    }

    /**
     * @return string
     */
    public function getDateOfCreation(): string
    {
        return $this->dateOfCreation;
    }

    /**
     * @return string
     */
    public function getExternalRegistrationNumber(): string
    {
        return $this->externalRegistrationNumber;
    }
}