<?php
namespace CH\UseCase\CompanyExemptions\Domain;

class Exemption
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var ExemptionsTimescale[]
     */
    private $timescales;

    public function __construct(string $type, array $timescales)
    {
        $this->type = $type;
        $this->timescales = $timescales;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return ExemptionsTimescale[]
     */
    public function getTimescales(): array
    {
        return $this->timescales;
    }
}