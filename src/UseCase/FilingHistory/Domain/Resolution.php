<?php
namespace CH\UseCase\FilingHistory\Domain;

class Resolution
{
    /**
     * @var string
     */
    private $category;
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
    private $documentId;
    /**
     * @var string
     */
    private $receiveDate;
    /**
     * @var string
     */
    private $subcategory;
    /**
     * @var string
     */
    private $type;

    /**
     * Resolution constructor.
     * @param array $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        $this->category = $jsonResponse['category'];
        $this->description = $jsonResponse['description'];
        $this->descriptionValues = $jsonResponse['description_values'];
        $this->documentId = $jsonResponse['document_id'];
        $this->receiveDate = $jsonResponse['receive_date'];
        $this->subcategory = $jsonResponse['subcategory'];
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
    public function getDocumentId(): string
    {
        return $this->documentId;
    }

    /**
     * @return string
     */
    public function getReceiveDate(): string
    {
        return $this->receiveDate;
    }

    /**
     * @return string
     */
    public function getSubcategory(): string
    {
        return $this->subcategory;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}