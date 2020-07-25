<?php
namespace CH\UseCase\RegisteredOffice\Domain;

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
     * @return string|null
     */
    public function getAddressLineOne(): ?string
    {
        return $this->addressLineOne;
    }

    /**
     * @return string|null
     */
    public function getAddressLineTwo(): ?string
    {
        return $this->addressLineTwo;
    }

    /**
     * @return string|null
     */
    public function getCareOf(): ?string
    {
        return $this->careOf;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @return string|null
     */
    public function getLocality(): ?string
    {
        return $this->locality;
    }

    /**
     * @return string|null
     */
    public function getPoBox(): ?string
    {
        return $this->poBox;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @return string|null
     */
    public function getPremises(): ?string
    {
        return $this->premises;
    }

    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }
}