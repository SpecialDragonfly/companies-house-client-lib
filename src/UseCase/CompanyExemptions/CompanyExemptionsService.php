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

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function get() : CompanyExemptions
    {
        $this->service->send('/company/{company_number}/exemptions', []);
    }
}