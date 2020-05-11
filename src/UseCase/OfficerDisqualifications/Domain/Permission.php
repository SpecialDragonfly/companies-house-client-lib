<?php
namespace CH\UseCase\OfficerDisqualifications\Domain;

class Permission
{
    /**
     * @var string
     */
    private $grantedOn;
    /**
     * @var string
     */
    private $expiresOn;
    /**
     * @var string
     */
    private $courtName;
    /**
     * @var string[]
     */
    private $companyNames;

    /**
     * Permission constructor.
     * @param array $jsonResponse
     */
    public function __construct(array $jsonResponse)
    {
        $this->companyNames = $jsonResponse['company_names'];
        $this->courtName = $jsonResponse['court_name'];
        $this->expiresOn = $jsonResponse['expires_on'];
        $this->grantedOn = $jsonResponse['granted_on'];
    }

    /**
     * @return string
     */
    public function getGrantedOn(): string
    {
        return $this->grantedOn;
    }

    /**
     * @return string
     */
    public function getExpiresOn(): string
    {
        return $this->expiresOn;
    }

    /**
     * @return string
     */
    public function getCourtName(): string
    {
        return $this->courtName;
    }

    /**
     * @return string[]
     */
    public function getCompanyNames(): array
    {
        return $this->companyNames;
    }
}