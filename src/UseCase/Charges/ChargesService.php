<?php

namespace CH\UseCase\Charges;

use CH\Service;
use CH\UseCase\Charges\Domain\ChargeDetails;
use CH\UseCase\Charges\Domain\ChargeList;

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

    public function get(string $companyNumber, string $chargeId) : ChargeDetails
    {
        return new ChargeDetails($this->service->send('/company/' . $companyNumber . '/charges/' . $chargeId, []));
    }

    public function list(string $companyNumber, int $itemsPerPage, int $startIndex) : ChargeList
    {
        return new ChargeList(
            $this->service->send(
                '/company/' . $companyNumber . '/charges',
                ['items_per_page' => $itemsPerPage, 'start_index' => $startIndex]
            )
        );
    }
}