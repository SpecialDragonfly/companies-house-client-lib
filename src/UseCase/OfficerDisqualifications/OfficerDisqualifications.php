<?php
namespace CH\UseCase\OfficerDisqualifications;

use CH\Service;

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

    public function getCorporate(string $officerId)
    {
        $this->service->send('/disqualified-officers/corporate/'.$officerId, []);
    }

    public function getNatural(string $officerId)
    {
        $this->service->send('/disqualified-officers/natural/'.$officerId, []);
    }
}