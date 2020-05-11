<?php
namespace CH\UseCase\CompanyRegisters\Domain;

class Register
{
    /**
     * @var RegisteredItem[]
     */
    private $items;
    /**
     * @var array<string, string>
     */
    private $links;
    /**
     * @var string
     */
    private $registerType;

    /**
     * Directors constructor.
     * @param array $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        $this->items = [];
        foreach ($jsonResponse['items'] as $item) {
            $this->items[] = new RegisteredItem($item);
        }
        $this->links = $jsonResponse['links'];
        $this->registerType = $jsonResponse['register_type'];
    }

    /**
     * @return RegisteredItem[]
     */
    public function getItems(): array
    {
        return $this->items;
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
    public function getRegisterType(): string
    {
        return $this->registerType;
    }
}