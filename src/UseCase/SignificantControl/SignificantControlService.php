<?php
namespace CH\UseCase\SignificantControl;

use CH\Service;
use CH\UseCase\SignificantControl\Domain\CorporateEntity;
use CH\UseCase\SignificantControl\Domain\Individual;
use CH\UseCase\SignificantControl\Domain\LegalPerson;
use CH\UseCase\SignificantControl\Domain\PersonList;
use CH\UseCase\SignificantControl\Domain\Statement;
use CH\UseCase\SignificantControl\Domain\StatementList;
use CH\UseCase\SignificantControl\Domain\SuperSecure;

class SignificantControlService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function getCorporate(string $companyNumber, string $pscId) : CorporateEntity
    {
        $this->service->send('/company/{company_number}/persons-with-significant-control/corporate-entity/{psc_id}', []);
    }

    public function getIndividual(string $companyNumber, string $pscId) : Individual
    {
        $this->service->send('/company/{company_number}/persons-with-significant-control/individual/{psc_id}', []);
    }

    public function getLegal(string $companyNumber, string $pscId) : LegalPerson
    {
        $this->service->send('/company/{company_number}/persons-with-significant-control/legal-person/{psc_id}', []);
    }

    public function getStatement(string $companyNumber, string $statementId) : Statement
    {
        $this->service->send('/company/{company_number}/persons-with-significant-control-statements/{statement_id}', []);
    }

    public function getSuperSecurePerson(string $companyNumber, string $superSecureId) : SuperSecure
    {
        $this->service->send('/company/{company_number}/persons-with-significant-control/super-secure/{super_secure_id}', []);
    }

    public function listAll(string $companyNumber) : PersonList
    {
        $this->service->send('/company/{company_number}/persons-with-significant-control', []);
    }

    public function listStatements(string $companyNumber) : StatementList
    {
        $this->service->send('/company/{company_number}/persons-with-significant-control-statements', []);
    }
}