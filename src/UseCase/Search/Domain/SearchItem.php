<?php
namespace CH\UseCase\Search\Domain;

class SearchItem
{
    /**
     * @var Address
     */
    private $address;
    /**
     * @var string
     */
    private $addressSnippet;
    /**
     * @var string
     */
    private $description;
    /**
     * @var int[]
     */
    private $descriptionIdentifier;
    /**
     * @var string
     */
    private $kind;
    /**
     * @var array<string, string>
     */
    private $links;
    /**
     * @var array<string, int[]>
     */
    private $matches;
    /**
     * @var string
     */
    private $snippet;
    /**
     * @var string
     */
    private $title;

    public function __construct(array $jsonResponse)
    {
        $this->address = new Address($jsonResponse['address']);
        $this->addressSnippet = $jsonResponse['address_snippet'];
        $this->description = $jsonResponse['description'];
        $this->descriptionIdentifier = $jsonResponse['description_identifier'];
        $this->kind = $jsonResponse['kind'];
        $this->links = $jsonResponse['links'];
        $this->matches = $jsonResponse['matches'];
        $this->snippet = $jsonResponse['snippet'];
        $this->title = $jsonResponse['title'];
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getAddressSnippet(): string
    {
        return $this->addressSnippet;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int[]
     */
    public function getDescriptionIdentifier(): array
    {
        return $this->descriptionIdentifier;
    }

    /**
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @return \array[]>
     */
    public function getMatches(): array
    {
        return $this->matches;
    }

    /**
     * @return string
     */
    public function getSnippet(): string
    {
        return $this->snippet;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}