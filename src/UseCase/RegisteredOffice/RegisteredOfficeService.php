<?php
namespace CH\UseCase\RegisteredOffice;

use CH\Service;

class RegisteredOfficeService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function getAddress(string $companyNumber)
    {
        $this->service->send('/company/'.$companyNumber.'/registered-office-address', []);
    }
}