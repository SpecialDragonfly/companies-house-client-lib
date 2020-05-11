<?php
namespace CH\UseCase\Insolvency\Domain;

class Practitioner
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
    private $ceasedToActOn;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $role;

    /**
     * Practitioner constructor.
     * @param array $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        $this->address = new Address($jsonResponse['address']);
        $this->appointedOn = $jsonResponse['appointed_on'];
        $this->ceasedToActOn = $jsonResponse['ceased_to_act_on'];
        $this->name = $jsonResponse['name'];
        $this->role = $jsonResponse['role'];
    }


}