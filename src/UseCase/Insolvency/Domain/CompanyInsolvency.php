<?php
namespace CH\UseCase\Insolvency\Domain;

class CompanyInsolvency
{
    /**
     * @var string
     */
    private $etag;
    /**
     * @var string[]
     */
    private $status;
    /**
     * @var InsolvencyCase[]
     */
    private $cases;

    public function __construct(array $jsonResponse)
    {
        $this->etag = $jsonResponse['etag'];
        $this->status = $jsonResponse['status'];
        $this->cases = [];
        foreach ($jsonResponse['cases'] as $case) {
            $this->cases[] = new InsolvencyCase($case);
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
     * @return string[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

    /**
     * @return InsolvencyCase[]
     */
    public function getCases(): array
    {
        return $this->cases;
    }
}