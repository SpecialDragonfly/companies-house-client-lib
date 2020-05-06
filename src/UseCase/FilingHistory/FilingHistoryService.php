<?php
namespace CH\UseCase\FilingHistory;

use CH\Service;

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

    public function get(string $companyNumber, string $transactionId)
    {
        $this->service->send('/company/'.$companyNumber.'/filing-history/'.$transactionId, []);
    }

    public function list(string $companyNumber, int $itemsPerPage = 0, int $startIndex = 0, string $category = '')
    {
        $this->service->send('/company/{company_number}/filing-history', ['category' => '', 'items_per_page' => '', 'start_index' => '']);
    }
}