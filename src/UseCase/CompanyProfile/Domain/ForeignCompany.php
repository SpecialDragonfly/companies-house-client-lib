<?php
namespace CH\UseCase\CompanyProfile\Domain;

class ForeignCompany
{
    /**
     * @var int
     */
    private $mustFileWithinMonths;
    /**
     * @var array
     */
    private $accountPeriodTo;
    /**
     * @var array
     */
    private $accountPeriodFrom;
    /**
     * @var string
     */
    private $registrationNumber;
    /**
     * @var string
     */
    private $originatingRegistryName;
    /**
     * @var string
     */
    private $originatingRegistryCountry;
    /**
     * @var bool
     */
    private $isACreditFinanceInstitution;
    /**
     * @var string
     */
    private $governedBy;
    /**
     * @var string
     */
    private $companyType;
    /**
     * @var string
     */
    private $businessActivity;
    /**
     * @var string
     */
    private $termsOfAccountPublication;
    /**
     * @var string
     */
    private $foreignAccountType;

    /**
     * ForeignCompany constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->foreignAccountType = $data['accounting_requirement']['foreign_account_type'];
        $this->termsOfAccountPublication = $data['accounting_requirement']['terms_of_account_publication'];
        $this->businessActivity = $data['business_activity'];
        $this->companyType = $data['company_type'];
        $this->governedBy = $data['governed_by'];
        $this->isACreditFinanceInstitution = (bool) $data['is_a_credit_finance_institution'];
        $this->originatingRegistryCountry = $data['originating_registry']['country'];
        $this->originatingRegistryName = $data['originating_registry']['name'];
        $this->registrationNumber = $data['registration_number'];
        $this->accountPeriodFrom = $data['accounts']['account_period_from'];
        $this->accountPeriodTo = $data['accounts']['account_period_to'];
        $this->mustFileWithinMonths = $data['accounts']['must_file_within']['months'];
    }

    /**
     * @return int
     */
    public function getMustFileWithinMonths(): int
    {
        return $this->mustFileWithinMonths;
    }

    /**
     * @return array
     */
    public function getAccountPeriodTo(): array
    {
        return $this->accountPeriodTo;
    }

    /**
     * @return array
     */
    public function getAccountPeriodFrom(): array
    {
        return $this->accountPeriodFrom;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber(): string
    {
        return $this->registrationNumber;
    }

    /**
     * @return string
     */
    public function getOriginatingRegistryName(): string
    {
        return $this->originatingRegistryName;
    }

    /**
     * @return string
     */
    public function getOriginatingRegistryCountry(): string
    {
        return $this->originatingRegistryCountry;
    }

    /**
     * @return bool
     */
    public function isACreditFinanceInstitution(): bool
    {
        return $this->isACreditFinanceInstitution;
    }

    /**
     * @return string
     */
    public function getGovernedBy(): string
    {
        return $this->governedBy;
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
    public function getBusinessActivity(): string
    {
        return $this->businessActivity;
    }

    /**
     * @return string
     */
    public function getTermsOfAccountPublication(): string
    {
        return $this->termsOfAccountPublication;
    }

    /**
     * @return string
     */
    public function getForeignAccountType(): string
    {
        return $this->foreignAccountType;
    }
}