<?php
namespace CH\UseCase;

use CH\Service;
use CH\UseCase\CompanyProfile\Domain\CompanyProfile;

class CompanyProfileService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function get(string $companyNumber) : CompanyProfile
    {
        return new CompanyProfile($this->service->send('/company/'.$companyNumber, []));
    }
}