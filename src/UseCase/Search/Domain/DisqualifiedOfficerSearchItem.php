<?php
namespace CH\UseCase\Search\Domain;

class DisqualifiedOfficerSearchItem extends SearchItem
{
    /**
     * @var array
     */
    private $dateOfBirth;

    /**
     * DisqualifiedOfficerSearchItem constructor.
     * @param array $jsonResponse
     */
    public function __construct(array $jsonResponse)
    {
        $this->dateOfBirth = $jsonResponse['date_of_birth'];
        parent::__construct($jsonResponse);
    }

    /**
     * @return array
     */
    public function getDateOfBirth(): array
    {
        return $this->dateOfBirth;
    }
}