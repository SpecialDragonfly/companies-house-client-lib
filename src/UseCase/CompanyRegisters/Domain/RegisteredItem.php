<?php
namespace CH\UseCase\CompanyRegisters\Domain;

class RegisteredItem
{
    /**
     * @var mixed
     */
    private $movedOn;
    /**
     * @var mixed
     */
    private $registerMovedTo;
    /**
     * @var mixed
     */
    private $links;

    /**
     * Director constructor.
     * @param array $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        $this->movedOn = $jsonResponse['moved_on'];
        $this->registerMovedTo = $jsonResponse['register_moved_to'];
        $this->links = $jsonResponse['links'];
    }

    /**
     * @return mixed
     */
    public function getMovedOn()
    {
        return $this->movedOn;
    }

    /**
     * @return mixed
     */
    public function getRegisterMovedTo()
    {
        return $this->registerMovedTo;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }
}