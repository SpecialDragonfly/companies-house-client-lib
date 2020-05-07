<?php
namespace CH\UseCase\Documents;

use CH\Service;
use CH\UseCase\Documents\Domain\DocumentMetaData;

class DocumentsService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function getDocument(string $id) : string
    {
        return $this->service->send('/document/'.$id.'/content', []);
    }

    public function getMetaData(string $id) : DocumentMetaData
    {
        return new DocumentMetaData($this->service->send('/document/'.$id, []));
    }
}