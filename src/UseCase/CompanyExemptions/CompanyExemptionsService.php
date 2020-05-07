<?php
namespace CH\UseCase\CompanyExemptions;

use CH\Service;
use CH\UseCase\CompanyExemptions\Domain\CompanyExemptions;

class CompanyExemptionsService
{
    /**
     * @var Service
     */
    private $service;

    /**
     * CompanyExemptionsService constructor.
     * @param Service $service
     */
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function get(string $companyNumber) : CompanyExemptions
    {
        $result = $this->service->send('/company/'.$companyNumber.'/exemptions', []);
        return new CompanyExemptions($result);
    }
}