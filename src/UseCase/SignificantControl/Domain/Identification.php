<?php
namespace CH\UseCase\SignificantControl\Domain;

class Identification
{
    /**
     * @var string
     */
    private $registrationNumber;
    /**
     * @var string
     */
    private $placeRegistered;
    /**
     * @var string
     */
    private $legalForm;
    /**
     * @var string
     */
    private $legalAuthority;
    /**
     * @var string
     */
    private $countryRegisterd;

    /**
     * Identification constructor.
     * @param array $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        $this->countryRegisterd = $jsonResponse['country_registered'];
        $this->legalAuthority = $jsonResponse['legal_authority'];
        $this->legalForm = $jsonResponse['legal_form'];
        $this->placeRegistered = $jsonResponse['place_registered'];
        $this->registrationNumber = $jsonResponse['registration_number'];
    }

    /**
     * @return string
     */
    public function getRegistrationNumber(): string
    {
        return $this->registrationNumber;
    }

    /**
     * @return string
     */
    public function getPlaceRegistered(): string
    {
        return $this->placeRegistered;
    }

    /**
     * @return string
     */
    public function getLegalForm(): string
    {
        return $this->legalForm;
    }

    /**
     * @return string
     */
    public function getLegalAuthority(): string
    {
        return $this->legalAuthority;
    }

    /**
     * @return string
     */
    public function getCountryRegisterd(): string
    {
        return $this->countryRegisterd;
    }
}