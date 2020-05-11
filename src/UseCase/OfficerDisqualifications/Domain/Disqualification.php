<?php
namespace CH\UseCase\OfficerDisqualifications\Domain;

class Disqualification
{
    /**
     * @var mixed
     */
    private $undertakenOn;
    /**
     * @var array
     */
    private $reason;
    /**
     * @var array
     */
    private $lastVariation;
    /**
     * @var string
     */
    private $heardOn;
    /**
     * @var string
     */
    private $disqualifiedUntil;
    /**
     * @var string
     */
    private $disqualifiedFrom;
    /**
     * @var string
     */
    private $disqualificationType;
    /**
     * @var string
     */
    private $courtName;
    /**
     * @var string[]
     */
    private $companyNames;
    /**
     * @var string
     */
    private $caseIdentifier;
    /**
     * @var Address
     */
    private $address;

    /**
     * Disqualification constructor.
     * @param array $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        $this->address = new Address($jsonResponse['address']);
        $this->caseIdentifier = $jsonResponse['case_identifier'];
        $this->companyNames = $jsonResponse['company_names'];
        $this->courtName = $jsonResponse['court_name'];
        $this->disqualificationType = $jsonResponse['disqualification_type'];
        $this->disqualifiedFrom = $jsonResponse['disqualified_from'];
        $this->disqualifiedUntil = $jsonResponse['disqualified_until'];
        $this->heardOn = $jsonResponse['heard_on'];
        $this->lastVariation = $jsonResponse['last_variation'];
        $this->reason = $jsonResponse['reason'];
        $this->undertakenOn = $jsonResponse['undertaken_on'];
    }

    /**
     * @return mixed
     */
    public function getUndertakenOn()
    {
        return $this->undertakenOn;
    }

    /**
     * @return array
     */
    public function getReason(): array
    {
        return $this->reason;
    }

    /**
     * @return array
     */
    public function getLastVariation(): array
    {
        return $this->lastVariation;
    }

    /**
     * @return string
     */
    public function getHeardOn(): string
    {
        return $this->heardOn;
    }

    /**
     * @return string
     */
    public function getDisqualifiedUntil(): string
    {
        return $this->disqualifiedUntil;
    }

    /**
     * @return string
     */
    public function getDisqualifiedFrom(): string
    {
        return $this->disqualifiedFrom;
    }

    /**
     * @return string
     */
    public function getDisqualificationType(): string
    {
        return $this->disqualificationType;
    }

    /**
     * @return string
     */
    public function getCourtName(): string
    {
        return $this->courtName;
    }

    /**
     * @return string[]
     */
    public function getCompanyNames(): array
    {
        return $this->companyNames;
    }

    /**
     * @return string
     */
    public function getCaseIdentifier(): string
    {
        return $this->caseIdentifier;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }
}