<?php
namespace CH\UseCase;

use CH\Service;

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

    public function get(string $companyNumber)
    {
        $this->service->send('/company/'.$companyNumber, []);
    }
}