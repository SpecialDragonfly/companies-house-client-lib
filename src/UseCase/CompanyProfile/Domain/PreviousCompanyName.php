<?php
namespace CH\UseCase\CompanyProfile\Domain;

class PreviousCompanyName
{
    /**
     * @var string
     */
    private $ceasedOn;
    /**
     * @var string
     */
    private $effectiveFrom;
    /**
     * @var string
     */
    private $name;

    /**
     * PreviousCompanyName constructor.
     * @param string $ceasedOn
     * @param string $effectiveFrom
     * @param string $name
     */
    public function __construct(string $ceasedOn, string $effectiveFrom, string $name)
    {
        $this->ceasedOn = $ceasedOn;
        $this->effectiveFrom = $effectiveFrom;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCeasedOn(): string
    {
        return $this->ceasedOn;
    }

    /**
     * @return string
     */
    public function getEffectiveFrom(): string
    {
        return $this->effectiveFrom;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}