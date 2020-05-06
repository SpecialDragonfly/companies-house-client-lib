<?php
namespace CH\UseCase\OfficerAppointment;

use CH\Service;

class OfficerAppointmentService
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function list(string $officerId)
    {
        $this->service->send('/officers/'.$officerId.'/appointments', ['items_per_page' => '', 'start_index' => '']);
    }
}