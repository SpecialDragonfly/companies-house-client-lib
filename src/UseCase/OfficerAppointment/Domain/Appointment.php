<?php
namespace CH\UseCase\OfficerAppointment\Domain;

class Appointment
{
    /**
     * @var array
     */
    private $formerNames;
    /**
     * @var array
     */
    private $appointedTo;
    /**
     * @var Address
     */
    private $address;
    /**
     * @var Identification
     */
    private $identification;
    /**
     * @var NameElements
     */
    private $nameElements;
    /**
     * @var bool
     */
    private $isPre1992Appointment;
    /**
     * @var array
     */
    private $links;
    /**
     * @var string
     */
    private $appointedBefore;
    /**
     * @var string
     */
    private $appointedOn;
    /**
     * @var string
     */
    private $countryOfResidence;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $nationality;
    /**
     * @var string
     */
    private $occupation;
    /**
     * @var string
     */
    private $officerRole;
    /**
     * @var string
     */
    private $resignedOn;

    /**
     * Appointment constructor.
     * @param array $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        $this->address = new Address($jsonResponse['address']);
        $this->appointedBefore = $jsonResponse['appointed_before'];
        $this->appointedOn = $jsonResponse['appointed_on'];
        $this->appointedTo = $jsonResponse['appointed_to'];
        $this->countryOfResidence = $jsonResponse['country_of_residence'];
        $this->formerNames = $jsonResponse['former_names'];
        $this->identification = new Identification($jsonResponse['identification']);
        $this->isPre1992Appointment = (bool) $jsonResponse['is_pre_1992_appointment'];
        $this->links = $jsonResponse['links'];
        $this->name = $jsonResponse['name'];
        $this->nameElements = new NameElements($jsonResponse['name_elements']);
        $this->nationality = $jsonResponse['nationality'];
        $this->occupation = $jsonResponse['occupation'];
        $this->officerRole = $jsonResponse['officer_role'];
        $this->resignedOn = $jsonResponse['resigned_on'];
    }

    /**
     * @return array
     */
    public function getFormerNames(): array
    {
        return $this->formerNames;
    }

    /**
     * @return array
     */
    public function getAppointedTo(): array
    {
        return $this->appointedTo;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return Identification
     */
    public function getIdentification(): Identification
    {
        return $this->identification;
    }

    /**
     * @return NameElements
     */
    public function getNameElements(): NameElements
    {
        return $this->nameElements;
    }

    /**
     * @return bool
     */
    public function isPre1992Appointment(): bool
    {
        return $this->isPre1992Appointment;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @return string
     */
    public function getAppointedBefore(): string
    {
        return $this->appointedBefore;
    }

    /**
     * @return string
     */
    public function getAppointedOn(): string
    {
        return $this->appointedOn;
    }

    /**
     * @return string
     */
    public function getCountryOfResidence(): string
    {
        return $this->countryOfResidence;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNationality(): string
    {
        return $this->nationality;
    }

    /**
     * @return string
     */
    public function getOccupation(): string
    {
        return $this->occupation;
    }

    /**
     * @return string
     */
    public function getOfficerRole(): string
    {
        return $this->officerRole;
    }

    /**
     * @return string
     */
    public function getResignedOn(): string
    {
        return $this->resignedOn;
    }
}