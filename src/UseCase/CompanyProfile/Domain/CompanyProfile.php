<?php

namespace CH\UseCase\CompanyProfile\Domain;

class CompanyProfile
{
    /**
     * @var Accounts
     */
    private $accounts;
    /**
     * @var AnnualReturn
     */
    private $annualReturn;
    /**
     * @var BranchCompanyDetails
     */
    private $branchCompanyDetails;
    /**
     * @var bool
     */
    private $canFile;
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
     * @var string
     */
    private $companyStatusDetail;
    /**
     * @var ConfirmationStatement
     */
    private $confirmationStatement;
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
    private $etag;
    /**
     * @var string
     */
    private $externalRegistrationNumber;
    /**
     * @var ForeignCompany
     */
    private $foreignCompanyDetails;
    /**
     * @var bool
     */
    private $hasBeenLiquidated;
    /**
     * @var bool
     */
    private $hasCharges;
    /**
     * @var bool
     */
    private $hasInsolvencyHistory;
    /**
     * @var bool
     */
    private $isCommunityInterestCompany;
    /**
     * @var string
     */
    private $jurisdiction;
    /**
     * @var string
     */
    private $lastFullMembersListDate;
    /**
     * @var string
     */
    private $links;
    /**
     * @var string
     */
    private $partialDataAvailable;
    /**
     * @var array
     */
    private $previousCompanyNames;
    /**
     * @var Address
     */
    private $registeredOfficeAddress;
    /**
     * @var bool
     */
    private $registeredOfficeIsInDispute;
    /**
     * @var string
     */
    private $sicCodes;
    /**
     * @var string
     */
    private $subtype;
    /**
     * @var string
     */
    private $type;
    /**
     * @var bool
     */
    private $undeliverableRegisteredOfficeAddress;

    public function __construct(array $jsonResponse)
    {
        $this->accounts = new Accounts($jsonResponse['accounts']);
        $this->annualReturn = new AnnualReturn($jsonResponse['annual_return']);
        $this->branchCompanyDetails = new BranchCompanyDetails($jsonResponse['branch_company_details']);
        $this->canFile = (bool) $jsonResponse['can_file'];
        $this->companyName = $jsonResponse['company_name'];
        $this->companyNumber = $jsonResponse['company_number'];
        $this->companyStatus = $jsonResponse['company_status'];
        $this->companyStatusDetail = $jsonResponse['company_status_detail'];
        $this->confirmationStatement = new ConfirmationStatement($jsonResponse['confirmation_statement']);
        $this->dateOfCessation = $jsonResponse['date_of_cessation'];
        $this->dateOfCreation = $jsonResponse['date_of_creation'];
        $this->etag = $jsonResponse['etag'];
        $this->externalRegistrationNumber = $jsonResponse['external_registration_number'];
        $this->foreignCompanyDetails = new ForeignCompany($jsonResponse['foreign_company_details']);
        $this->hasBeenLiquidated = (bool) $jsonResponse['has_been_liquidated'];
        $this->hasCharges = (bool) $jsonResponse['has_charges'];
        $this->hasInsolvencyHistory = (bool) $jsonResponse['has_insolvency_history'];
        $this->isCommunityInterestCompany = (bool) $jsonResponse['is_community_interest_company'];
        $this->jurisdiction = $jsonResponse['jurisdiction'];
        $this->lastFullMembersListDate = $jsonResponse['last_full_members_list_date'];
        $this->links = $jsonResponse['links'];
        $this->partialDataAvailable = $jsonResponse['partial_data_available'];
        $this->previousCompanyNames = $this->parsePreviousCompanyNames($jsonResponse['previous_company_names']);
        $this->registeredOfficeAddress = new Address($jsonResponse['registered_office_address']);
        $this->registeredOfficeIsInDispute = (bool) $jsonResponse['registered_office_is_in_dispute'];
        $this->sicCodes = $jsonResponse['sic_codes'];
        $this->subtype = $jsonResponse['subtype'];
        $this->type = $jsonResponse['type'];
        $this->undeliverableRegisteredOfficeAddress = (bool) $jsonResponse['undeliverable_registered_office_address'];
    }

    private function parsePreviousCompanyNames($previousCompanyNames) : array
    {
        $names = [];
        foreach ($previousCompanyNames as $previousCompanyName) {
            $names[] = new PreviousCompanyName($previousCompanyName['ceased_on'],
                $previousCompanyName['effective_from'],
                $previousCompanyName['name']);
        }
        return $names;
    }

    /**
     * @return Accounts
     */
    public function getAccounts(): Accounts
    {
        return $this->accounts;
    }

    /**
     * @return AnnualReturn
     */
    public function getAnnualReturn(): AnnualReturn
    {
        return $this->annualReturn;
    }

    /**
     * @return BranchCompanyDetails
     */
    public function getBranchCompanyDetails(): BranchCompanyDetails
    {
        return $this->branchCompanyDetails;
    }

    /**
     * @return bool
     */
    public function isCanFile(): bool
    {
        return $this->canFile;
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
     * @return string
     */
    public function getCompanyStatusDetail(): string
    {
        return $this->companyStatusDetail;
    }

    /**
     * @return ConfirmationStatement
     */
    public function getConfirmationStatement(): ConfirmationStatement
    {
        return $this->confirmationStatement;
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
    public function getEtag(): string
    {
        return $this->etag;
    }

    /**
     * @return string
     */
    public function getExternalRegistrationNumber(): string
    {
        return $this->externalRegistrationNumber;
    }

    /**
     * @return ForeignCompany
     */
    public function getForeignCompanyDetails(): ForeignCompany
    {
        return $this->foreignCompanyDetails;
    }

    /**
     * @return bool
     */
    public function isHasBeenLiquidated(): bool
    {
        return $this->hasBeenLiquidated;
    }

    /**
     * @return bool
     */
    public function isHasCharges(): bool
    {
        return $this->hasCharges;
    }

    /**
     * @return bool
     */
    public function isHasInsolvencyHistory(): bool
    {
        return $this->hasInsolvencyHistory;
    }

    /**
     * @return bool
     */
    public function isCommunityInterestCompany(): bool
    {
        return $this->isCommunityInterestCompany;
    }

    /**
     * @return string
     */
    public function getJurisdiction(): string
    {
        return $this->jurisdiction;
    }

    /**
     * @return string
     */
    public function getLastFullMembersListDate(): string
    {
        return $this->lastFullMembersListDate;
    }

    /**
     * @return string
     */
    public function getLinks(): string
    {
        return $this->links;
    }

    /**
     * @return string
     */
    public function getPartialDataAvailable(): string
    {
        return $this->partialDataAvailable;
    }

    /**
     * @return array
     */
    public function getPreviousCompanyNames(): array
    {
        return $this->previousCompanyNames;
    }

    /**
     * @return Address
     */
    public function getRegisteredOfficeAddress(): Address
    {
        return $this->registeredOfficeAddress;
    }

    /**
     * @return bool
     */
    public function isRegisteredOfficeIsInDispute(): bool
    {
        return $this->registeredOfficeIsInDispute;
    }

    /**
     * @return string
     */
    public function getSicCodes(): string
    {
        return $this->sicCodes;
    }

    /**
     * @return string
     */
    public function getSubtype(): string
    {
        return $this->subtype;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isUndeliverableRegisteredOfficeAddress(): bool
    {
        return $this->undeliverableRegisteredOfficeAddress;
    }
}