<?php
namespace CH\UseCase\CompanyProfile\Domain;

class AnnualReturn
{
    /**
     * @var string
     */
    private $overdue;
    /**
     * @var string
     */
    private $nextMadeUpTo;
    /**
     * @var string
     */
    private $nextDue;
    /**
     * @var string
     */
    private $lastMadeUpTo;

    /**
     * AnnualReturn constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->lastMadeUpTo = $data['last_made_up_to'];
        $this->nextDue = $data['next_due'];
        $this->nextMadeUpTo = $data['next_made_up_to'];
        $this->overdue = $data['overdue'];
    }

    /**
     * @return string
     */
    public function getOverdue(): string
    {
        return $this->overdue;
    }

    /**
     * @return string
     */
    public function getNextMadeUpTo(): string
    {
        return $this->nextMadeUpTo;
    }

    /**
     * @return string
     */
    public function getNextDue(): string
    {
        return $this->nextDue;
    }

    /**
     * @return string
     */
    public function getLastMadeUpTo(): string
    {
        return $this->lastMadeUpTo;
    }
}