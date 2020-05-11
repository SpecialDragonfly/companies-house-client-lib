<?php
namespace CH\UseCase\CompanyRegisters\Domain;

class Registers
{
    /**
     * @var Register
     */
    private $directors;
    /**
     * @var Register
     */
    private $llpMembers;
    /**
     * @var Register
     */
    private $llpUsualResidentialAddress;
    /**
     * @var Register
     */
    private $members;
    /**
     * @var Register
     */
    private $personsWithSignificantControl;
    /**
     * @var Register
     */
    private $secretaries;
    /**
     * @var Register
     */
    private $usualResidentialAddress;

    /**
     * Registers constructor.
     * @param array $jsonResponse
     */
    public function __construct(array $jsonResponse)
    {
        $this->directors = new Register($jsonResponse['directors']);
        $this->llpMembers = new Register($jsonResponse['llp_members']);
        $this->llpUsualResidentialAddress = new Register($jsonResponse['llp_usual_residential_address']);
        $this->members = new Register($jsonResponse['members']);
        $this->personsWithSignificantControl = new Register($jsonResponse['persons_with_significant_control']);
        $this->secretaries = new Register($jsonResponse['secretaries']);
        $this->usualResidentialAddress = new Register($jsonResponse['usual_residential_address']);
    }

    /**
     * @return Register
     */
    public function getDirectors(): Register
    {
        return $this->directors;
    }

    /**
     * @return Register
     */
    public function getLlpMembers(): Register
    {
        return $this->llpMembers;
    }

    /**
     * @return Register
     */
    public function getLlpUsualResidentialAddress(): Register
    {
        return $this->llpUsualResidentialAddress;
    }

    /**
     * @return Register
     */
    public function getMembers(): Register
    {
        return $this->members;
    }

    /**
     * @return Register
     */
    public function getPersonsWithSignificantControl(): Register
    {
        return $this->personsWithSignificantControl;
    }

    /**
     * @return Register
     */
    public function getSecretaries(): Register
    {
        return $this->secretaries;
    }

    /**
     * @return Register
     */
    public function getUsualResidentialAddress(): Register
    {
        return $this->usualResidentialAddress;
    }
}