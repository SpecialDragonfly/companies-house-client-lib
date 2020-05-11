<?php
namespace CH\UseCase\EstablishmentCompaniesUk;

use CH\Service;
use CH\UseCase\EstablishmentCompaniesUk\Domain\CompanyUkEstablishments;

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

    public function list(string $companyNumber) : CompanyUkEstablishments
    {
        return new CompanyUkEstablishments(
            $this->service->send(
                '/company/' . $companyNumber . '/uk-establishments',
                []
            )
        );
    }
}