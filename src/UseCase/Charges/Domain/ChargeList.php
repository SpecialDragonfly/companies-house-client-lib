<?php
namespace CH\UseCase\Charges\Domain;

class ChargeList
{
    /**
     * @var string
     */
    private $etag;
    /**
     * @var array
     */
    private $items;
    /**
     * @var int
     */
    private $partSatisfiedCount;
    /**
     * @var int
     */
    private $satisfiedCount;
    /**
     * @var int
     */
    private $totalCount;
    /**
     * @var int
     */
    private $unfileteredCount;

    /**
     * ChargeList constructor.
     * @param array $jsonResponse
     */
    public function __construct(array $jsonResponse) {
        $this->etag = $jsonResponse['etag'];
        $this->partSatisfiedCount = $jsonResponse['part_satisfied_count'];
        $this->satisfiedCount = $jsonResponse['satisfied_count'];
        $this->totalCount = $jsonResponse['total_count'];
        $this->unfileteredCount = $jsonResponse['unfiletered_count'];
        foreach ($jsonResponse['items'] as $item) {
            $this->items[] = new ChargeDetails($item);
        }
    }

    /**
     * @return string
     */
    public function getEtag(): string
    {
        return $this->etag;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return int
     */
    public function getPartSatisfiedCount(): int
    {
        return $this->partSatisfiedCount;
    }

    /**
     * @return int
     */
    public function getSatisfiedCount(): int
    {
        return $this->satisfiedCount;
    }

    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @return int
     */
    public function getUnfilteredCount(): int
    {
        return $this->unfileteredCount;
    }
}