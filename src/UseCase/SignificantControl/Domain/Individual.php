<?php
namespace CH\UseCase\SignificantControl\Domain;

class Individual extends Significant
{
    /**
     * @var string
     */
    private $nationality;
    /**
     * @var array<string, string> Keys: {forename, other_forenames, surname, title}
     */
    private $nameElements;
    /**
     * @var array<string, string> Keys: {day, month, year}
     */
    private $dateOfBirth;
    /**
     * @var string
     */
    private $countryOfResidence;

    public function __construct(array $jsonResponse)
    {
        $this->countryOfResidence = $jsonResponse['country_of_residence'];
        $this->dateOfBirth = $jsonResponse['date_of_birth'];
        $this->nameElements = $jsonResponse['name_elements'];
        $this->nationality = $jsonResponse['nationality'];
        parent::__construct($jsonResponse);
    }

    /**
     * @return string
     */
    public function getNationality(): string
    {
        return $this->nationality;
    }

    /**
     * @return array
     */
    public function getNameElements(): array
    {
        return $this->nameElements;
    }

    /**
     * @return array
     */
    public function getDateOfBirth(): array
    {
        return $this->dateOfBirth;
    }

    /**
     * @return string
     */
    public function getCountryOfResidence(): string
    {
        return $this->countryOfResidence;
    }
}