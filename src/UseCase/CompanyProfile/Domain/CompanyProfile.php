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
     * @var array
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
        $this->canFile = (bool) $jsonResponse['can_file'];
        $this->companyName = $jsonResponse['company_name'];
        $this->companyNumber = $jsonResponse['company_number'];
        $this->jurisdiction = $jsonResponse['jurisdiction'];
        $this->links = $jsonResponse['links'];
        $this->type = $jsonResponse['type'];

        if (array_key_exists('accounts', $jsonResponse)) {
            $this->accounts = new Accounts($jsonResponse['accounts']);
        } else {
            $this->accounts = null;
        }
        if (array_key_exists('annual_return', $jsonResponse)) {
            $this->annualReturn = new AnnualReturn($jsonResponse['annual_return']);
        } else {
            $this->annualReturn = null;
        }
        if (array_key_exists('branch_company_details', $jsonResponse)) {
            $this->branchCompanyDetails = new BranchCompanyDetails($jsonResponse['branch_company_details']);
        } else {
            $this->branchCompanyDetails = null;
        }
        if (array_key_exists('company_status', $jsonResponse)) {
            $this->companyStatus = $jsonResponse['company_status'];
        } else {
            $this->companyStatus = null;
        }
        if (array_key_exists('company_status_detail', $jsonResponse)) {
            $this->companyStatusDetail = $jsonResponse['company_status_detail'];
        } else {
            $this->companyStatusDetail = null;
        }
        if (array_key_exists('confirmation_statement', $jsonResponse)) {
            $this->confirmationStatement = new ConfirmationStatement($jsonResponse['confirmation_statement']);
        } else {
            $this->confirmationStatement = null;
        }
        if (array_key_exists('date_of_cessation', $jsonResponse)) {
            $this->dateOfCessation = $jsonResponse['date_of_cessation'];
        } else {
            $this->dateOfCessation = null;
        }
        if (array_key_exists('date_of_creation', $jsonResponse)) {
            $this->dateOfCreation = $jsonResponse['date_of_creation'];
        } else {
            $this->dateOfCreation = null;
        }
        if (array_key_exists('etag', $jsonResponse)) {
            $this->etag = $jsonResponse['etag'];
        } else {
            $this->etag = null;
        }
        if (array_key_exists('external_registration_number', $jsonResponse)) {
            $this->externalRegistrationNumber = $jsonResponse['external_registration_number'];
        } else {
            $this->externalRegistrationNumber = null;
        }
        if (array_key_exists('foreign_company_details', $jsonResponse)) {
            $this->foreignCompanyDetails = new ForeignCompany($jsonResponse['foreign_company_details']);
        } else {
            $this->foreignCompanyDetails = null;
        }
        if (array_key_exists('has_been_liquidated', $jsonResponse)) {
            $this->hasBeenLiquidated = (bool) $jsonResponse['has_been_liquidated'];
        } else {
            $this->hasBeenLiquidated = null;
        }
        if (array_key_exists('has_charged', $jsonResponse)) {
            $this->hasCharges = (bool) $jsonResponse['has_charges'];
        } else {
            $this->hasCharges = null;
        }
        if (array_key_exists('has_insolvency_history', $jsonResponse)) {
            $this->hasInsolvencyHistory = (bool) $jsonResponse['has_insolvency_history'];
        } else {
            $this->hasInsolvencyHistory = null;
        }
        if (array_key_exists('is_community_interest_company', $jsonResponse)) {
            $this->isCommunityInterestCompany = (bool) $jsonResponse['is_community_interest_company'];
        } else {
            $this->isCommunityInterestCompany = null;
        }
        if (array_key_exists('last_full_members_list_date', $jsonResponse)) {
            $this->lastFullMembersListDate = $jsonResponse['last_full_members_list_date'];
        } else {
            $this->lastFullMembersListDate = null;
        }
        if (array_key_exists('partial_data_available', $jsonResponse)) {
            $this->partialDataAvailable = $jsonResponse['partial_data_available'];
        } else {
            $this->partialDataAvailable = null;
        }
        if (array_key_exists('previous_company_names', $jsonResponse)) {
            $this->previousCompanyNames = $this->parsePreviousCompanyNames($jsonResponse['previous_company_names']);
        } else {
            $this->previousCompanyNames = null;
        }
        if (array_key_exists('registered_office_address', $jsonResponse)) {
            $this->registeredOfficeAddress = new Address($jsonResponse['registered_office_address']);
        } else {
            $this->registeredOfficeAddress = null;
        }
        if (array_key_exists('registered_office_is_in_dispute', $jsonResponse)) {
            $this->registeredOfficeIsInDispute = (bool) $jsonResponse['registered_office_is_in_dispute'];
        } else {
            $this->registeredOfficeIsInDispute = null;
        }
        if (array_key_exists('sic_codes', $jsonResponse)) {
            $this->sicCodes = $jsonResponse['sic_codes'];
        } else {
            $this->sicCodes = null;
        }
        if (array_key_exists('subtype', $jsonResponse)) {
            $this->subtype = $jsonResponse['subtype'];
        } else {
            $this->subtype = null;
        }
        if (array_key_exists('undeliverable_registered_office_address', $jsonResponse)) {
            $this->undeliverableRegisteredOfficeAddress = (bool) $jsonResponse['undeliverable_registered_office_address'];
        } else {
            $this->undeliverableRegisteredOfficeAddress = null;
        }
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
     * @return Accounts|null
     */
    public function getAccounts(): ?Accounts
    {
        return $this->accounts;
    }

    /**
     * @return AnnualReturn|null
     */
    public function getAnnualReturn(): ?AnnualReturn
    {
        return $this->annualReturn;
    }

    /**
     * @return BranchCompanyDetails|null
     */
    public function getBranchCompanyDetails(): ?BranchCompanyDetails
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
     * @return string|null
     */
    public function getCompanyStatus(): ?string
    {
        return $this->companyStatus;
    }

    /**
     * @return string|null
     */
    public function getCompanyStatusDetail(): ?string
    {
        return $this->companyStatusDetail;
    }

    /**
     * @return ConfirmationStatement|null
     */
    public function getConfirmationStatement(): ?ConfirmationStatement
    {
        return $this->confirmationStatement;
    }

    /**
     * @return string|null
     */
    public function getDateOfCessation(): ?string
    {
        return $this->dateOfCessation;
    }

    /**
     * @return string|null
     */
    public function getDateOfCreation(): ?string
    {
        return $this->dateOfCreation;
    }

    /**
     * @return string|null
     */
    public function getEtag(): ?string
    {
        return $this->etag;
    }

    /**
     * @return string|null
     */
    public function getExternalRegistrationNumber(): ?string
    {
        return $this->externalRegistrationNumber;
    }

    /**
     * @return ForeignCompany|null
     */
    public function getForeignCompanyDetails(): ?ForeignCompany
    {
        return $this->foreignCompanyDetails;
    }

    /**
     * @return bool|null
     */
    public function isHasBeenLiquidated(): ?bool
    {
        return $this->hasBeenLiquidated;
    }

    /**
     * @return bool|null
     */
    public function isHasCharges(): ?bool
    {
        return $this->hasCharges;
    }

    /**
     * @return bool|null
     */
    public function isHasInsolvencyHistory(): ?bool
    {
        return $this->hasInsolvencyHistory;
    }

    /**
     * @return bool|null
     */
    public function isCommunityInterestCompany(): ?bool
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
     * @return string|null
     */
    public function getLastFullMembersListDate(): ?string
    {
        return $this->lastFullMembersListDate;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @return string|null
     */
    public function getPartialDataAvailable(): ?string
    {
        return $this->partialDataAvailable;
    }

    /**
     * @return array|null
     */
    public function getPreviousCompanyNames(): ?array
    {
        return $this->previousCompanyNames;
    }

    /**
     * @return Address|null
     */
    public function getRegisteredOfficeAddress(): ?Address
    {
        return $this->registeredOfficeAddress;
    }

    /**
     * @return bool|null
     */
    public function isRegisteredOfficeIsInDispute(): ?bool
    {
        return $this->registeredOfficeIsInDispute;
    }

    /**
     * @return string|null
     */
    public function getSicCodes(): ?string
    {
        return $this->sicCodes;
    }

    /**
     * @return string|null
     */
    public function getSubtype(): ?string
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
     * @return bool|null
     */
    public function isUndeliverableRegisteredOfficeAddress(): ?bool
    {
        return $this->undeliverableRegisteredOfficeAddress;
    }
}