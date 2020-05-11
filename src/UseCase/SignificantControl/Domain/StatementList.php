<?php
namespace CH\UseCase\SignificantControl\Domain;

class StatementList
{
    /**
     * @var Statement[]
     */
    private $items;
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
    private $itemsPerPage;
    /**
     * @var int
     */
    private $ceasedCount;
    /**
     * @var int
     */
    private $activeCount;
    /**
     * @var array<string, string>
     */
    private $links;
    /**
     * @var string
     */
    private $kind;
    /**
     * @var string
     */
    private $etag;

    public function __construct(array $jsonResponse)
    {
        $this->activeCount = (int) $jsonResponse['active_count'];
        $this->ceasedCount = (int) $jsonResponse['ceased_count'];
        $this->etag = $jsonResponse['etag'];
        $this->itemsPerPage = (int) $jsonResponse['items_per_page'];
        $this->kind = $jsonResponse['kind'];
        $this->links = $jsonResponse['links'];
        $this->startIndex = (int) $jsonResponse['start_index'];
        $this->totalResults = (int) $jsonResponse['total_results'];
        $this->items = [];
        foreach ($jsonResponse['items'] as $item) {
            $this->items[] = new Statement($item);
        }
    }

    /**
     * @return Statement[]
     */
    public function getItems(): array
    {
        return $this->items;
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
    public function getItemsPerPage(): int
    {
        return $this->itemsPerPage;
    }

    /**
     * @return int
     */
    public function getCeasedCount(): int
    {
        return $this->ceasedCount;
    }

    /**
     * @return int
     */
    public function getActiveCount(): int
    {
        return $this->activeCount;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @return string
     */
    public function getEtag(): string
    {
        return $this->etag;
    }
}