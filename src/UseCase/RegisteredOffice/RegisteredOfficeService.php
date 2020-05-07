<?php
namespace CH\UseCase\RegisteredOffice;

use CH\Service;
use CH\UseCase\RegisteredOffice\Domain\Address;

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

    public function getAddress(string $companyNumber) : Address
    {
        return new Address($this->service->send('/company/'.$companyNumber.'/registered-office-address', []));
    }
}