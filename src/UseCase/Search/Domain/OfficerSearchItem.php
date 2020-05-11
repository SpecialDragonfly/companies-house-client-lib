<?php
namespace CH\UseCase\Search\Domain;

class OfficerSearchItem extends SearchItem
{
    /**
     * @var array
     */
    private $dateOfBirth;
    /**
     * @var int
     */
    private $appointmentCount;

    /**
     * OfficerSearchItem constructor.
     * @param array $jsonResponse
     */
    public function __construct(array $jsonResponse)
    {
        $this->appointmentCount = (int) $jsonResponse['appointment_count'];
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

    /**
     * @return int
     */
    public function getAppointmentCount(): int
    {
        return $this->appointmentCount;
    }
}