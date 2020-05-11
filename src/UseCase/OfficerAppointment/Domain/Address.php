<?php
namespace CH\UseCase\OfficerAppointment\Domain;

class Address
{
    /**
     * @var string
     */
    private $addressLineOne;
    /**
     * @var string
     */
    private $addressLineTwo;
    /**
     * @var string
     */
    private $careOf;
    /**
     * @var string
     */
    private $country;
    /**
     * @var string
     */
    private $locality;
    /**
     * @var string
     */
    private $poBox;
    /**
     * @var string
     */
    private $postalCode;
    /**
     * @var string
     */
    private $premises;
    /**
     * @var string
     */
    private $region;

    public function __construct(array $data)
    {
        $this->addressLineOne = $data['address_line_1'];
        $this->addressLineTwo = $data['address_line_2'];
        $this->careOf = $data['careOf'];
        $this->country = $data['country'];
        $this->locality = $data['locality'];
        $this->poBox = $data['po_box'];
        $this->postalCode = $data['postal_code'];
        $this->premises = $data['premises'];
        $this->region = $data['region'];
    }

    /**
     * @return string
     */
    public function getAddressLineOne(): string
    {
        return $this->addressLineOne;
    }

    /**
     * @return string
     */
    public function getAddressLineTwo(): string
    {
        return $this->addressLineTwo;
    }

    /**
     * @return string
     */
    public function getCareOf(): string
    {
        return $this->careOf;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getLocality(): string
    {
        return $this->locality;
    }

    /**
     * @return string
     */
    public function getPoBox(): string
    {
        return $this->poBox;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getPremises(): string
    {
        return $this->premises;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
}