<?php
namespace CH\UseCase\Search\Domain;

class SearchResult
{
    /**
     * @var SearchItem[]
     */
    private $items;
    /**
     * @var string
     */
    private $etag;
    /**
     * @var int
     */
    private $itemsPerPage;
    /**
     * @var string
     */
    private $kind;
    /**
     * @var int
     */
    private $startIndex;
    /**
     * @var int
     */
    private $totalResults;

    public function __construct(array $jsonResponse)
    {
        $this->etag = $jsonResponse['etag'];
        $this->itemsPerPage = (int) $jsonResponse['items_per_page'];
        $this->kind = $jsonResponse['kind'];
        $this->startIndex = (int) $jsonResponse['start_index'];
        $this->totalResults = (int) $jsonResponse['total_results'];
        $this->items = [];
        foreach ($jsonResponse['items'] as $item) {
            $this->items[] = new SearchItem($item);
        }
    }

    /**
     * @return SearchItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return string
     */
    public function getEtag(): string
    {
        return $this->etag;
    }

    /**
     * @return int
     */
    public function getItemsPerPage(): int
    {
        return $this->itemsPerPage;
    }

    /**
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
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
    public function getTotalResults(): int
    {
        return $this->totalResults;
    }
}