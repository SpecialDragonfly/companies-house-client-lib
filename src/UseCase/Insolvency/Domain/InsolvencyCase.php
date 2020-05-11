<?php
namespace CH\UseCase\Insolvency\Domain;

class InsolvencyCase
{
    /**
     * @var Practitioner[]
     */
    private $practitioners;
    /**
     * @var string
     */
    private $type;
    /**
     * @var int
     */
    private $number;
    /**
     * @var array<string, string>
     */
    private $notes;
    /**
     * @var array<string, string>
     */
    private $links;
    /**
     * @var array<string, string>
     */
    private $dates;

    /**
     * InsolvencyCase constructor.
     * @param array $jsonResponse
     */
    public function __construct($jsonResponse)
    {
        $this->dates = $jsonResponse['dates'];
        $this->links = $jsonResponse['links'];
        $this->notes = $jsonResponse['notes'];
        $this->number = (int) $jsonResponse['number'];
        $this->type = $jsonResponse['type'];
        $this->practitioners = [];
        foreach ($jsonResponse['practitioners'] as $practitioner) {
            $this->practitioners[] = new Practitioner($practitioner);
        }
    }

    /**
     * @return Practitioner[]
     */
    public function getPractitioners(): array
    {
        return $this->practitioners;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return array
     */
    public function getNotes(): array
    {
        return $this->notes;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @return array
     */
    public function getDates(): array
    {
        return $this->dates;
    }
}