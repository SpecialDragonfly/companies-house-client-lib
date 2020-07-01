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

    /**
     * @return int
     */
    public function getTotalResults(): int
    {
        return $this->totalResults;
    }

    /**
     * @return int
     */
    public function getStartIndex(): int
    {
        return $this->startIndex;
    }

    /**
     * @return int
     */
    public function getResignedCount(): int
    {
        return $this->resignedCount;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @return int
     */
    public function getItemsPerPage(): int
    {
        return $this->itemsPerPage;
    }

    /**
     * @return int
     */
    public function getInactiveCount(): int
    {
        return $this->inactiveCount;
    }

    /**
     * @return mixed
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @return int
     */
    public function getActiveCount(): int
    {
        return $this->activeCount;
    }

    /**
     * @return Person[]
     */
    public function getOfficers() : array
    {
        return $this->people;
    }
}