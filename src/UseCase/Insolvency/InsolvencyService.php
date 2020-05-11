<?php
namespace CH\UseCase\Insolvency;

use CH\Service;
use CH\UseCase\Insolvency\Domain\CompanyInsolvency;

class InsolvencyService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function get(string $companyNumber) : CompanyInsolvency
    {
        return new CompanyInsolvency($this->service->send('/company/'.$companyNumber.'/insolvency', []));
    }
}