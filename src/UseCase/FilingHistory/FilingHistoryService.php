<?php
namespace CH\UseCase\FilingHistory;

use CH\Service;
use CH\UseCase\FilingHistory\Domain\FilingHistoryItem;
use CH\UseCase\FilingHistory\Domain\FilingHistoryList;

class FilingHistoryService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function get(string $companyNumber, string $transactionId) : FilingHistoryItem
    {
        return new FilingHistoryItem($this->service->send('/company/'.$companyNumber.'/filing-history/'.$transactionId, []));
    }

    public function list(
        string $companyNumber,
        int $itemsPerPage = 0,
        int $startIndex = 0,
        string $category = ''
    ): FilingHistoryList {
        return new FilingHistoryList(
            $this->service->send(
                '/company/'.$companyNumber.'/filing-history',
                ['category' => '', 'items_per_page' => '', 'start_index' => '']
            )
        );
    }
}