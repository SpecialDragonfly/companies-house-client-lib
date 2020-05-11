<?php
namespace CH\UseCase\OfficerAppointment\Domain;

class NameElements
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $surname;
    /**
     * @var string
     */
    private $otherForenames;
    /**
     * @var string
     */
    private $honours;
    /**
     * @var string
     */
    private $forename;

    /**
     * NameElements constructor.
     * @param array $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        $this->forename = $jsonResponse['forename'];
        $this->honours = $jsonResponse['honours'];
        $this->otherForenames = $jsonResponse['other_forenames'];
        $this->surname = $jsonResponse['surname'];
        $this->title = $jsonResponse['title'];
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getOtherForenames(): string
    {
        return $this->otherForenames;
    }

    /**
     * @return string
     */
    public function getHonours(): string
    {
        return $this->honours;
    }

    /**
     * @return string
     */
    public function getForename(): string
    {
        return $this->forename;
    }
}