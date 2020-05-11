<?php
namespace CH\UseCase\OfficerDisqualifications\Domain;

class CorporateDisqualification
{
    /**
     * @var Disqualification[]
     */
    private $disqualifications;
    /**
     * @var Permission[]
     */
    private $permissionsToAct;
    /**
     * @var string
     */
    private $name;
    /**
     * @var array
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
    private $companyOfRegistration;
    /**
     * @var string
     */
    private $companyNumber;

    public function __construct(array $jsonResponse)
    {
        $this->companyNumber = $jsonResponse['company_number'];
        $this->companyOfRegistration = $jsonResponse['country_of_registration'];
        $this->etag = $jsonResponse['etag'];
        $this->kind = $jsonResponse['kind'];
        $this->links = $jsonResponse['links'];
        $this->name = $jsonResponse['name'];
        $this->permissionsToAct = [];
        foreach ($jsonResponse['permissions_to_act'] as $permission) {
            $this->permissionsToAct[] = new Permission($permission);
        }
        $this->disqualifications = [];
        foreach ($jsonResponse['disqualifications'] as $disqualification) {
            $this->disqualifications[] = new Disqualification($disqualification);
        }
    }

    /**
     * @return Disqualification[]
     */
    public function getDisqualifications(): array
    {
        return $this->disqualifications;
    }

    /**
     * @return Permission[]
     */
    public function getPermissionsToAct(): array
    {
        return $this->permissionsToAct;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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
    public function getCompanyOfRegistration(): string
    {
        return $this->companyOfRegistration;
    }

    /**
     * @return string
     */
    public function getCompanyNumber(): string
    {
        return $this->companyNumber;
    }
}