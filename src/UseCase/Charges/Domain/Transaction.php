<?php
namespace CH\UseCase\Charges\Domain;

class Transaction
{
/*
       "transactions" : [
          {
             "delivered_on" : "date",
             "filing_type" : "string",
             "insolvency_case_number" : "integer",
             "links" : {
                "filing" : "string",
                "insolvency_case" : "string"
             },
             "transaction_id" : "integer"
          }
       ]

 */
    /**
     * @var string
     */
    private $deliveredOn;
    /**
     * @var string
     */
    private $filingType;
    /**
     * @var int
     */
    private $insolvencyCaseNumber;
    /**
     * @var int
     */
    private $transactionId;
    /**
     * @var array
     */
    private $links;

    /**
     * Transaction constructor.
     * @param array<string, mixed> $jsonResponse
     */
    public function __construct(array $jsonResponse)
    {
        $this->deliveredOn = $jsonResponse['delivered_on'];
        $this->filingType = $jsonResponse['filing_type'];
        $this->insolvencyCaseNumber = $jsonResponse['insolvency_case_number'];
        $this->transactionId = $jsonResponse['transaction_id'];
        $this->links = $jsonResponse['links'];
    }

    /**
     * @return string
     */
    public function getDeliveredOn(): string
    {
        return $this->deliveredOn;
    }

    /**
     * @return string
     */
    public function getFilingType(): string
    {
        return $this->filingType;
    }

    /**
     * @return int
     */
    public function getInsolvencyCaseNumber(): int
    {
        return $this->insolvencyCaseNumber;
    }

    /**
     * @return int
     */
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }
}