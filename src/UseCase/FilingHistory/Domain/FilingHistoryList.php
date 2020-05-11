<?php
namespace CH\UseCase\FilingHistory\Domain;

class FilingHistoryList
{
    /**
     * @var string
     */
    private $etag;
    /**
     * @var string
     */
    private $filingHistoryStatus;
    /**
     * @var array
     */
    private $items;
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
    private $totalCount;

    public function __construct(array $jsonResponse)
    {
        $this->etag = $jsonResponse['etag'];
        $this->filingHistoryStatus = $jsonResponse['filing_history_status'];
        $this->items = [];
        foreach ($jsonResponse['items'] as $item) {
            $this->items[] = new FilingHistoryItem($item);
        }
        $this->itemsPerPage = (int) $jsonResponse['items_per_page'];
        $this->kind = $jsonResponse['kind'];
        $this->startIndex = (int) $jsonResponse['start_index'];
        $this->totalCount = (int) $jsonResponse['total_count'];
    }

    /**
     * @return string
     */
    public function getEtag(): string
    {
        return $this->etag;
    }

    /**
     * @return string
     */
    public function getFilingHistoryStatus(): string
    {
        return $this->filingHistoryStatus;
    }

    /**
     * @return FilingHistoryItem[]
     */
    public function getItems(): array
    {
        return $this->items;
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
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
}