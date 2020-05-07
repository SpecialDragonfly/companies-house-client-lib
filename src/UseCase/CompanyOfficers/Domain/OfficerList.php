<?php

namespace CH\UseCase\CompanyOfficers\Domain;

class OfficerList
{
    /**
     * @var int
     */
    private $totalResults;
    /**
     * @var int
     */
    private $startIndex;
    /**
     * @var int
     */
    private $resignedCount;
    /**
     * @var mixed
     */
    private $links;
    /**
     * @var mixed
     */
    private $kind;
    /**
     * @var int
     */
    private $itemsPerPage;
    /**
     * @var int
     */
    private $inactiveCount;
    /**
     * @var mixed
     */
    private $etag;
    /**
     * @var int
     */
    private $activeCount;
    /**
     * @var Person[]
     */
    private $people;

    public function __construct(array $jsonResults)
    {
        $this->activeCount = (int) $jsonResults['active_count'];
        $this->etag = $jsonResults['etag'];
        $this->inactiveCount = (int) $jsonResults['inactive_count'];
        $this->itemsPerPage = (int) $jsonResults['items_per_page'];
        $this->kind = $jsonResults['kind'];
        $this->links = $jsonResults['links'];
        $this->resignedCount = (int) $jsonResults['resignedCount'];
        $this->startIndex = (int) $jsonResults['start_index'];
        $this->totalResults = (int) $jsonResults['total_results'];
        $this->people = $this->getPeople($jsonResults['items']);
    }

    private function getPeople($items)
    {
        $people = [];
        foreach ($items as $item) {
            $people[] = new Person($item);
        }
        return $people;
    }
}