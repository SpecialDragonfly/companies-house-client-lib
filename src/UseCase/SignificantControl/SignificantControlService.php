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

    public function getCorporate(string $companyNumber, string $pscId): CorporateEntity
    {
        return new CorporateEntity(
            $this->service->send(
                '/company/' . $companyNumber . '/persons-with-significant-control/corporate-entity/' . $pscId,
                []
            )
        );
    }

    public function getIndividual(string $companyNumber, string $pscId): Individual
    {
        return new Individual(
            $this->service->send(
                '/company/' . $companyNumber . '/persons-with-significant-control/individual/' . $pscId,
                []
            )
        );
    }

    public function getLegal(string $companyNumber, string $pscId): LegalPerson
    {
        return new LegalPerson(
            $this->service->send(
                '/company/' . $companyNumber . '/persons-with-significant-control/legal-person/' . $pscId,
                []
            )
        );
    }

    public function getStatement(string $companyNumber, string $statementId): Statement
    {
        return new Statement(
            $this->service->send(
                '/company/' . $companyNumber . '/persons-with-significant-control-statements/' . $statementId,
                []
            )
        );
    }

    public function getSuperSecurePerson(string $companyNumber, string $superSecureId): SuperSecure
    {
        return new SuperSecure(
            $this->service->send(
                '/company/' . $companyNumber . '/persons-with-significant-control/super-secure/' . $superSecureId,
                []
            )
        );
    }

    public function listAll(string $companyNumber): PersonList
    {
        return new PersonList(
            $this->service->send(
                '/company/' . $companyNumber . '/persons-with-significant-control',
                []
            )
        );
    }

    public function listStatements(string $companyNumber): StatementList
    {
        return new StatementList(
            $this->service->send(
                '/company/' . $companyNumber . '/persons-with-significant-control-statements',
                []
            )
        );
    }
}