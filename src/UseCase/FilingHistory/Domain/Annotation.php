<?php
namespace CH\UseCase\FilingHistory\Domain;

class Annotation
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var array<string, string>
     */
    private $descriptionValues;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $date;
    /**
     * @var string
     */
    private $category;
    /**
     * @var string
     */
    private $annotation;

    /**
     * Annotation constructor.
     * @param array $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        $this->annotation = $jsonResponse['annotation'];
        $this->category = $jsonResponse['category'];
        $this->date = $jsonResponse['date'];
        $this->description = $jsonResponse['description'];
        $this->descriptionValues = $jsonResponse['description_values'];
        $this->type = $jsonResponse['type'];
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }
}