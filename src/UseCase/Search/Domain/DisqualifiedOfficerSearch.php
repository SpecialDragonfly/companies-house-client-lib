<?php
namespace CH\UseCase\Search\Domain;

class DisqualifiedOfficerSearch
{
    /**
     * @var DisqualifiedOfficerSearchItem[]
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
    private $totalResults;

    public function __construct(array $jsonResponse)
    {
        $this->itemsPerPage = (int) $jsonResponse['items_per_page'];
        $this->kind = $jsonResponse['kind'];
        $this->startIndex = (int) $jsonResponse['start_index'];
        $this->totalResults = (int) $jsonResponse['total_results'];
        $this->items = [];
        foreach ($jsonResponse['items'] as $item) {
            $this->items[] = new DisqualifiedOfficerSearchItem($item);
        }
    }

    /**
     * @return DisqualifiedOfficerSearchItem[]
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
    public function getTotalResults(): int
    {
        return $this->totalResults;
    }
}