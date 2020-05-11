<?php
namespace CH\UseCase\FilingHistory\Domain;

class FilingHistoryItem
{
    /**
     * @var Annotation[]
     */
    private $annotations;
    /**
     * @var AssociatedFiling[]
     */
    private $associatedFilings;
    /**
     * @var Resolution[]
     */
    private $resolutions;
    /**
     * @var string
     */
    private $barcode;
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
     * @var array<string, string>
     */
    private $descriptionValues;
    /**
     * @var array<string, string>
     */
    private $links;
    /**
     * @var int
     */
    private $pages;
    /**
     * @var bool
     */
    private $paperFiled;
    /**
     * @var string
     */
    private $subcategory;
    /**
     * @var string
     */
    private $transactionId;
    /**
     * @var string
     */
    private $type;

    public function __construct(array $jsonResponse)
    {
        $this->annotations = [];
        foreach ($jsonResponse['annotations'] as $annotation) {
            $this->annotations[] = new Annotation($annotation);
        }
        $this->associatedFilings = [];
        foreach ($jsonResponse['associated_filings'] as $associated_filing) {
            $this->associatedFilings[] = new AssociatedFiling($associated_filing);
        }
        $this->barcode = $jsonResponse['barcode'];
        $this->category = $jsonResponse['category'];
        $this->date = $jsonResponse['date'];
        $this->description = $jsonResponse['description'];
        $this->descriptionValues = $jsonResponse['description_values'];
        $this->links = $jsonResponse['links'];
        $this->pages = (int) $jsonResponse['pages'];
        $this->paperFiled = (bool) $jsonResponse['paper_filed'];
        $this->resolutions = [];
        foreach ($jsonResponse['resolutions'] as $resolution) {
            $this->resolutions[] = new Resolution($resolution);
        }
        $this->subcategory = $jsonResponse['subcategory'];
        $this->transactionId = $jsonResponse['transaction_id'];
        $this->type = $jsonResponse['type'];
    }

    /**
     * @return Annotation[]
     */
    public function getAnnotations(): array
    {
        return $this->annotations;
    }

    /**
     * @return AssociatedFiling[]
     */
    public function getAssociatedFilings(): array
    {
        return $this->associatedFilings;
    }

    /**
     * @return Resolution[]
     */
    public function getResolutions(): array
    {
        return $this->resolutions;
    }

    /**
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->barcode;
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
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @return int
     */
    public function getPages(): int
    {
        return $this->pages;
    }

    /**
     * @return bool
     */
    public function isPaperFiled(): bool
    {
        return $this->paperFiled;
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
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}