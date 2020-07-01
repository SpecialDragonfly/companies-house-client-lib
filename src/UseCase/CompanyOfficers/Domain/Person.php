<?php
namespace CH\UseCase\CompanyOfficers\Domain;

class Person
{
    /**
     * @var Address
     */
    private $address;
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
    private $dateOfBirth;
    /**
     * @var FormerName[]
     */
    private $formerNames;
    /**
     * @var Identification|null
     */
    private $identification;
    /**
     * @var array
     */
    private $links;
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

    public function __construct(array $data)
    {
        $this->resignedOn = $data['resigned_on'];
        $this->officerRole = $data['officer_role'];
        $this->occupation = $data['occupation'];
        $this->nationality = $data['nationality'];
        $this->name = $data['name'];
        $this->links = $data['links'];

        $this->identification = null;
        if (isset($data['identification'])) {
            $this->identification = new Identification($data['identification']);
        }
        $this->formerNames = $this->parseFormerNames($data['former_names']);
        $this->dateOfBirth = sprintf(
            "%s-%s-%s",
            $data['date_of_birth']['year'],
            $data['date_of_birth']['month'],
            $data['date_of_birth']['day']
        );
        $this->countryOfResidence = $data['country_of_residence'];
        $this->appointedOn = $data['appointed_on'];
        $this->address = new Address($data['address']);
    }

    /**
     * @param array $formerNames
     * @return FormerName[]
     */
    private function parseFormerNames($formerNames) : array
    {
        if ($formerNames === null) {
            return [];
        }

        $names = [];
        foreach ($formerNames as $formerName) {
            $names[] = new FormerName($formerName['forenames'], $formerName['surname']);
        }

        return $names;
    }

    /**
     * @return FormerName[]
     */
    public function getFormerNames(): array
    {
        return $this->formerNames;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
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
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }

    /**
     * @return Identification|null
     */
    public function getIdentification(): ?Identification
    {
        return $this->identification;
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