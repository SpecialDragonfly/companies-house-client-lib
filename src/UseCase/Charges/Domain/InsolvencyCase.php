<?php
namespace CH\UseCase\Charges\Domain;

class InsolvencyCase
{
    /**
     * @var int
     */
    private $caseNumber;
    /**
     * @var array
     */
    private $links;
    /**
     * @var int
     */
    private $transactionId;

    public function __construct(array $jsonResponse)
    {
        $this->caseNumber = $jsonResponse['case_number'];
        $this->transactionId = $jsonResponse['transaction_id'];
        $this->links = $jsonResponse['links'];
    }

    /**
     * @return int
     */
    public function getCaseNumber(): int
    {
        return $this->caseNumber;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @return int
     */
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }
}