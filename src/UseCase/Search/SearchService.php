<?php
namespace CH\UseCase;

use CH\Service;

class SearchService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function searchAll(string $query, int $itemsPerPage, int $startIndex)
    {
        $this->service->send('/search', ['q' => $query, 'items_per_page' => $itemsPerPage, 'start_index' => $startIndex]);
    }

    public function searchCompany(string $query, int $itemsPerPage, int $startIndex) {
        $this->service->send('/search/companies', ['q' => $query, 'items_per_page' => $itemsPerPage, 'start_index' => $startIndex]);
    }

    public function searchDisqualifiedOfficer(string $query, int $itemsPerPage, int $startIndex) {
        $this->service->send('/search/disqualified-officers', ['q' => $query, 'items_per_page' => $itemsPerPage, 'start_index' => $startIndex]);
    }

    public function searchOfficer(string $query, int $itemsPerPage, int $startIndex) {
        $this->service->send('/search/officers', ['q' => $query, 'items_per_page' => $itemsPerPage, 'start_index' => $startIndex]);
    }
}