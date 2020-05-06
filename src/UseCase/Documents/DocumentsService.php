<?php
namespace CH\UseCase\Documents;

use CH\Service;

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

    public function getDocument() : string
    {
        $this->service->send('/document/{id}/content', []);
    }

    public function getMetaData()
    {
        $this->service->send('/document/{id}', []);
    }
}