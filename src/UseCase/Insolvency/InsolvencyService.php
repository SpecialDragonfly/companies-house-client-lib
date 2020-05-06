<?php
namespace CH\UseCase\Insolvency;

use CH\Service;

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

    public function get(string $companyNumber)
    {
        $this->service->send('/company/'.$companyNumber.'/insolvency', []);
    }
}