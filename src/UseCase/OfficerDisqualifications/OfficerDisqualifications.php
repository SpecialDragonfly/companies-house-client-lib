<?php
namespace CH\UseCase\OfficerDisqualifications;

use CH\Service;
use CH\UseCase\OfficerDisqualifications\Domain\CorporateDisqualification;
use CH\UseCase\OfficerDisqualifications\Domain\NaturalDisqualification;

class OfficerDisqualifications
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function getCorporate(string $officerId) : CorporateDisqualification
    {
        return new CorporateDisqualification(
            $this->service->send(
                '/disqualified-officers/corporate/' . $officerId,
                []
            )
        );
    }

    public function getNatural(string $officerId) : NaturalDisqualification
    {
        return new NaturalDisqualification($this->service->send('/disqualified-officers/natural/' . $officerId, []));
    }
}