<?php
namespace CH\UseCase\Charges\Domain;

class ChargeDetails
{
    /**
     * @var string
     */
    private $acquiredOn;
    /**
     * @var string
     */
    private $assetsCeasedReleased;
    /**
     * @var string
     */
    private $chargeCode;
    /**
     * @var int
     */
    private $chargeNumber;
    /**
     * @var array
     */
    private $classification;
    /**
     * @var string
     */
    private $coveringInstrumentDate;
    /**
     * @var string
     */
    private $createdOn;
    /**
     * @var string
     */
    private $deliveredOn;
    /**
     * @var string
     */
    private $etag;
    /**
     * @var string
     */
    private $id;
    /**
     * @var bool
     */
    private $moreThanFourPersonsEntitles;
    /**
     * @var array
     */
    private $personsEntitled;
    /**
     * @var string
     */
    private $resolvedOn;
    /**
     * @var string
     */
    private $satisfiedOn;
    /**
     * @var array
     */
    private $securedDetails;
    /**
     * @var string
     */
    private $status;
    /**
     * @var Particulars
     */
    private $particulars;
    /**
     * @var ScottishAlterations
     */
    private $scottishAlterations;
    /**
     * @var array
     */
    private $insolvencyCases;
    /**
     * @var array
     */
    private $links;
    /**
     * @var array
     */
    private $transactions;

    /**
     * ChargeDetails constructor.
     * @param array<string, mixed> $jsonResponse
     */
    public function __construct(
        array $jsonResponse
    ) {
        $this->acquiredOn = $jsonResponse['acquiredOn'];
        $this->assetsCeasedReleased = $jsonResponse['assets_ceased_released'];
        $this->chargeCode = $jsonResponse['charge_code'];
        $this->chargeNumber = $jsonResponse['charge_number'];
        $this->classification = $jsonResponse['classification'];
        $this->coveringInstrumentDate = $jsonResponse['covering_instrument_date'];
        $this->createdOn = $jsonResponse['created_on'];
        $this->deliveredOn = $jsonResponse['delivered_on'];
        $this->etag = $jsonResponse['etag'];
        $this->id = $jsonResponse['id'];
        $this->moreThanFourPersonsEntitles = $jsonResponse['more_than_four_persons_entitles'];
        $this->personsEntitled = $jsonResponse['persons_entitled'];
        $this->resolvedOn = $jsonResponse['resolved_on'];
        $this->satisfiedOn = $jsonResponse['satisfied_on'];
        $this->securedDetails = $jsonResponse['secured_details'];
        $this->status = $jsonResponse['status'];
        $jsonParticulars = $jsonResponse['particulars'];
        $this->particulars = new Particulars(
            (bool) $jsonParticulars['chargor_acting_as_bare_trustee'],
            (bool) $jsonParticulars['contains_fixed_charge'],
            (bool) $jsonParticulars['contains_floating_charge'],
            (bool) $jsonParticulars['contains_negative_pledge'],
            $jsonParticulars['description'],
            (bool) $jsonParticulars['floating_charge_covers_all'],
            $jsonParticulars['type']
        );
        $jsonScottishAlterations = $jsonResponse['scottish_alterations'];
        $this->scottishAlterations = new ScottishAlterations(
            (bool) $jsonScottishAlterations['has_alterations_to_order'],
            (bool) $jsonScottishAlterations['has_alterations_to_prohibitions'],
            (bool) $jsonScottishAlterations['has_restricting_provisions']
        );
        $jsonInsolvencyCases = $jsonResponse['insolvency_cases'];
        foreach ($jsonInsolvencyCases as $jsonInsolvencyCase) {
            $this->insolvencyCases[] = new InsolvencyCase($jsonInsolvencyCase);
        }
        $this->links = $jsonResponse['links'];
        $jsonTransactions = $jsonResponse['transactions'];
        foreach ($jsonTransactions as $jsonTransaction) {
            $this->transactions[] = new Transaction($jsonTransaction);
        }
    }

    /**
     * @return string
     */
    public function getAcquiredOn(): string
    {
        return $this->acquiredOn;
    }

    /**
     * @return string
     */
    public function getAssetsCeasedReleased(): string
    {
        return $this->assetsCeasedReleased;
    }

    /**
     * @return string
     */
    public function getChargeCode(): string
    {
        return $this->chargeCode;
    }

    /**
     * @return int
     */
    public function getChargeNumber(): int
    {
        return $this->chargeNumber;
    }

    /**
     * @return array
     */
    public function getClassification(): array
    {
        return $this->classification;
    }

    /**
     * @return string
     */
    public function getCoveringInstrumentDate(): string
    {
        return $this->coveringInstrumentDate;
    }

    /**
     * @return string
     */
    public function getCreatedOn(): string
    {
        return $this->createdOn;
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
    public function getEtag(): string
    {
        return $this->etag;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isMoreThanFourPersonsEntitles(): bool
    {
        return $this->moreThanFourPersonsEntitles;
    }

    /**
     * @return array
     */
    public function getPersonsEntitled(): array
    {
        return $this->personsEntitled;
    }

    /**
     * @return string
     */
    public function getResolvedOn(): string
    {
        return $this->resolvedOn;
    }

    /**
     * @return string
     */
    public function getSatisfiedOn(): string
    {
        return $this->satisfiedOn;
    }

    /**
     * @return array
     */
    public function getSecuredDetails(): array
    {
        return $this->securedDetails;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return Particulars
     */
    public function getParticulars(): Particulars
    {
        return $this->particulars;
    }

    /**
     * @return ScottishAlterations
     */
    public function getScottishAlterations(): ScottishAlterations
    {
        return $this->scottishAlterations;
    }

    /**
     * @return array
     */
    public function getInsolvencyCases(): array
    {
        return $this->insolvencyCases;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @return array
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }
}