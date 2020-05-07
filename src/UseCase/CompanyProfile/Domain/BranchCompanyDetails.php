<?php
namespace CH\UseCase\CompanyProfile\Domain;

class BranchCompanyDetails
{
    /**
     * @var string
     */
    private $parentCompanyNumber;
    /**
     * @var string
     */
    private $parentCompanyName;
    /**
     * @var string
     */
    private $businessActivity;

    /**
     * BranchCompanyDetails constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->businessActivity = $data['business_activity'];
        $this->parentCompanyName = $data['parent_company_name'];
        $this->parentCompanyNumber = $data['parent_company_number'];
    }

    /**
     * @return string
     */
    public function getParentCompanyNumber(): string
    {
        return $this->parentCompanyNumber;
    }

    /**
     * @return string
     */
    public function getParentCompanyName(): string
    {
        return $this->parentCompanyName;
    }

    /**
     * @return string
     */
    public function getBusinessActivity(): string
    {
        return $this->businessActivity;
    }
}