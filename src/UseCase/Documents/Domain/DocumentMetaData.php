<?php
namespace CH\UseCase\Documents\Domain;

class DocumentMetaData
{
    /**
     * @var string
     */
    private $updatedAt;
    /**
     * @var array
     */
    private $resources;
    /**
     * @var int
     */
    private $pages;
    /**
     * @var array
     */
    private $links;
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $etag;
    /**
     * @var string
     */
    private $createdAt;

    public function __construct(array $data)
    {
        $this->createdAt = $data['created_at'];
        $this->etag = $data['etag'];
        $this->id = $data['id'];
        $this->links = $data['links'];
        $this->pages = (int) $data['pages'];
        $this->resources = $data['resources'];
        $this->updatedAt = $data['updated_at'];
    }

    public function isPdf() : bool
    {
        return isset($this->resources['application/pdf']);
    }

    public function isJson() : bool
    {
        return isset($this->resources['application/json']);
    }

    public function isXml() : bool
    {
        return isset($this->resources['application/xml']);
    }

    public function isHtml() : bool
    {
        return isset($this->resources['application/xhtml+xml']);
    }

    public function iCsv() : bool
    {
        return isset($this->resources['text/csv']);
    }

    /**
     * @return string[]
     */
    public function getAvailableContentTypes() : array
    {
        return array_keys($this->resources);
    }

    public function getPdfContent() : array
    {
        return $this->resources['application/pdf'];
    }

    public function getJsonContent() : array
    {
        return $this->resources['application/json'];
    }

    public function getXmlContent() : array
    {
        return $this->resources['application/xml'];
    }

    public function getHtmlContent() : array
    {
        return $this->resources['application/xhtml+xml'];
    }

    public function getCsvContent() : array
    {
        return $this->resources['text/csv'];
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @return int
     */
    public function getPages(): int
    {
        return $this->pages;
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
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEtag(): string
    {
        return $this->etag;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
}