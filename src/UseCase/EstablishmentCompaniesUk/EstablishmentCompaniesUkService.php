<?php
namespace CH\UseCase\EstablishmentCompaniesUk;

use CH\Service;

class EstablishmentCompaniesUkService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function list()
    {
        $this->service->send('/company/{company_number}/uk-establishments', []);
    }
}