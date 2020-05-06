<?php
namespace CH\UseCase\CompanyOfficers;

use CH\Service;

class CompanyOfficersService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function list(string $companyNumber)
    {
        $this->service->send('/company/'.$companyNumber.'/officers');
    }
}