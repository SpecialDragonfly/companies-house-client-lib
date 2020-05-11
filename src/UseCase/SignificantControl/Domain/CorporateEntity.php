<?php
namespace CH\UseCase\SignificantControl\Domain;

class CorporateEntity extends Significant
{
    /**
     * @var Identification
     */
    private $identification;

    public function __construct(array $jsonResponse)
    {
        $this->identification = new Identification($jsonResponse['identification']);
        parent::__construct($jsonResponse);
    }

    /**
     * @return Identification
     */
    public function getIdentification(): Identification
    {
        return $this->identification;
    }

}