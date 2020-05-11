<?php
namespace CH\UseCase\OfficerAppointment;

use CH\Service;
use CH\UseCase\OfficerAppointment\Domain\AppointmentList;

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

    public function list(string $officerId) : AppointmentList
    {
        return new AppointmentList(
            $this->service->send(
                '/officers/' . $officerId . '/appointments',
                ['items_per_page' => '', 'start_index' => '']
            )
        );
    }
}