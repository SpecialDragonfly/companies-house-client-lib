<?php
namespace CH\UseCase\CompanyOfficers\Domain;

class FormerName
{
    /**
     * @var string
     */
    private $firstName;
    /**
     * @var string
     */
    private $surname;

    public function __construct(string $firstName, string $surname)
    {
        $this->firstName = $firstName;
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }
}