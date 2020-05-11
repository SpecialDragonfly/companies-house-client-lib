<?php
namespace CH\UseCase\FilingHistory\Domain;

class AssociatedFiling
{
    /**
     * @var string
     */
    private $category;
    /**
     * @var string
     */
    private $date;
    /**
     * @var string
     */
    private $description;
    /**
     * @var array
     */
    private $descriptionValues;
    /**
     * @var string
     */
    private $type;

    /**
     * AssociatedFiling constructor.
     * @param array $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        $this->category = $jsonResponse['category'];
        $this->date = $jsonResponse['date'];
        $this->description = $jsonResponse['description'];
        $this->descriptionValues = $jsonResponse['description_values'];
        $this->type = $jsonResponse['type'];
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function getDescriptionValues(): array
    {
        return $this->descriptionValues;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}