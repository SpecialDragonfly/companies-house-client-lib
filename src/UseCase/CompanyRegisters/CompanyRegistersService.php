<?php
namespace CH\UseCase\CompanyRegisters;

use CH\Service;
use CH\UseCase\CompanyRegisters\Domain\CompanyRegister;

class CompanyRegistersService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function get(string $companyNumber) : CompanyRegister
    {
        $this->service->send('/company/'.$companyNumber.'/registers', []);
    }
}