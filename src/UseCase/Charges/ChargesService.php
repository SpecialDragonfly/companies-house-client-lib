<?php

namespace CH\UseCase\Charges;

use CH\Service;

class ChargesService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function get(string $companyNumber, string $chargeId)
    {
        $this->service->send('/company/'.$companyNumber.'/charges/'.$chargeId, []);
    }

    public function list(string $companyNumber, int $itemsPerPage, int $startIndex)
    {
        $this->service->send('/company/'.$companyNumber.'/charges', ['items_per_page' => $itemsPerPage, 'start_index' => $startIndex]);
    }
}