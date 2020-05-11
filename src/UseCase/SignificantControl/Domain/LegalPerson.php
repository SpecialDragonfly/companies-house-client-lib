<?php
namespace CH\UseCase\SignificantControl\Domain;

class LegalPerson extends Significant
{
    /**
     * @var array<string, string> Keys: {legal_authority, legal_form}
     */
    private $identification;

    public function __construct(array $jsonResponse)
    {
        $this->identification = $jsonResponse['identification'];
        parent::__construct($jsonResponse);
    }

    /**
     * @return array
     */
    public function getIdentification(): array
    {
        return $this->identification;
    }
}