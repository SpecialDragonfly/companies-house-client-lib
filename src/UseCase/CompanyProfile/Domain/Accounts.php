<?php
namespace CH\UseCase\CompanyProfile\Domain;

class Accounts
{
    /**
     * @var bool
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
    private $nextAccountsPeriodStartOn;
    /**
     * @var string
     */
    private $nextAccountsPeriodEndOn;
    /**
     * @var bool
     */
    private $nextAccountsOverdue;
    /**
     * @var string
     */
    private $nextAccountsDueOn;
    /**
     * @var string
     */
    private $lastAccountsType;
    /**
     * @var string
     */
    private $lastAccountsPeriodStartOn;
    /**
     * @var string
     */
    private $lastAccountsPeriodEndOn;
    /**
     * @var string
     */
    private $lastAccountsMadeUpTo;
    /**
     * @var array<string, int> Keys are 'day' and 'month'
     */
    private $accountingReferenceDate;

    public function __construct(array $data)
    {
        $this->accountingReferenceDate = $data['accounting_reference_date'];
        $this->lastAccountsMadeUpTo = $data['last_accounts']['made_up_to'];
        $this->lastAccountsPeriodEndOn = $data['last_accounts']['period_end_on'];
        $this->lastAccountsPeriodStartOn = $data['last_accounts']['period_start_on'];
        $this->lastAccountsType = $data['last_accounts']['type'];
        $this->nextAccountsDueOn = $data['next_accounts']['due_on'];
        $this->nextAccountsOverdue = (bool) $data['next_accounts']['overdue'];
        $this->nextAccountsPeriodEndOn = $data['next_accounts']['period_end_on'];
        $this->nextAccountsPeriodStartOn = $data['next_accounts']['period_start_on'];
        $this->nextDue = $data['next_due'];
        $this->nextMadeUpTo = $data['next_made_up_to'];
        $this->overdue = (bool) $data['overdue'];
    }

    /**
     * @return bool
     */
    public function isOverdue(): bool
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
    public function getNextAccountsPeriodStartOn(): string
    {
        return $this->nextAccountsPeriodStartOn;
    }

    /**
     * @return string
     */
    public function getNextAccountsPeriodEndOn(): string
    {
        return $this->nextAccountsPeriodEndOn;
    }

    /**
     * @return bool
     */
    public function isNextAccountsOverdue(): bool
    {
        return $this->nextAccountsOverdue;
    }

    /**
     * @return string
     */
    public function getNextAccountsDueOn(): string
    {
        return $this->nextAccountsDueOn;
    }

    /**
     * @return string
     */
    public function getLastAccountsType(): string
    {
        return $this->lastAccountsType;
    }

    /**
     * @return string
     */
    public function getLastAccountsPeriodStartOn(): string
    {
        return $this->lastAccountsPeriodStartOn;
    }

    /**
     * @return string
     */
    public function getLastAccountsPeriodEndOn(): string
    {
        return $this->lastAccountsPeriodEndOn;
    }

    /**
     * @return string
     */
    public function getLastAccountsMadeUpTo(): string
    {
        return $this->lastAccountsMadeUpTo;
    }

    /**
     * @return array
     */
    public function getAccountingReferenceDate(): array
    {
        return $this->accountingReferenceDate;
    }
}