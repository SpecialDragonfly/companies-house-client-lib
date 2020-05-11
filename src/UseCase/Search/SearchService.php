<?php

namespace CH\UseCase\Search;

use CH\Service;
use CH\UseCase\Search\Domain\CompanySearch;
use CH\UseCase\Search\Domain\DisqualifiedOfficerSearch;
use CH\UseCase\Search\Domain\OfficerSearch;
use CH\UseCase\Search\Domain\SearchResult;

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

    public function searchAll(string $query, int $itemsPerPage, int $startIndex): SearchResult
    {
        return new SearchResult(
            $this->service->send(
                '/search',
                ['q' => $query, 'items_per_page' => $itemsPerPage, 'start_index' => $startIndex]
            )
        );
    }

    public function searchCompany(string $query, int $itemsPerPage, int $startIndex): CompanySearch
    {
        return new CompanySearch(
            $this->service->send(
                '/search/companies',
                ['q' => $query, 'items_per_page' => $itemsPerPage, 'start_index' => $startIndex]
            )
        );
    }

    public function searchDisqualifiedOfficer(
        string $query,
        int $itemsPerPage,
        int $startIndex
    ): DisqualifiedOfficerSearch {
        return new DisqualifiedOfficerSearch(
            $this->service->send(
                '/search/disqualified-officers',
                ['q' => $query, 'items_per_page' => $itemsPerPage, 'start_index' => $startIndex]
            )
        );
    }

    public function searchOfficer(string $query, int $itemsPerPage, int $startIndex): OfficerSearch
    {
        return new OfficerSearch(
            $this->service->send(
                '/search/officers',
                ['q' => $query, 'items_per_page' => $itemsPerPage, 'start_index' => $startIndex]
            )
        );
    }
}