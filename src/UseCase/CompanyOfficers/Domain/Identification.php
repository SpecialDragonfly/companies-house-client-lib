<?php
namespace CH\UseCase\CompanyOfficers\Domain;

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
    private $identificationType;

    public function __construct(array $data)
    {
        $this->identificationType = $data['identification_type'] ?? '';
        $this->legalAuthority = $data['legal_authority'] ?? '';
        $this->legalForm = $data['legal_form'] ?? '';
        $this->placeRegistered = $data['place_registered'] ?? '';
        $this->registrationNumber = $data['registration_number'] ?? '';
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
    public function getIdentificationType(): string
    {
        return $this->identificationType;
    }
}