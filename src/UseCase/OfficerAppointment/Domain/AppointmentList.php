<?php
namespace CH\UseCase\OfficerAppointment\Domain;

class AppointmentList
{
    public function __construct(array $jsonResponse)
    {
        $this->dateOfBirth = $jsonResponse['date_of_birth'];
        $this->etag = $jsonResponse['etag'];
        $this->isCorporateOfficer = (bool) $jsonResponse['is_corporate_officer'];
        $this->itemsPerPage = (int) $jsonResponse['items_per_page'];
        $this->kind = $jsonResponse['kind'];
        $this->links = $jsonResponse['links'];
        $this->name = $jsonResponse['name'];
        $this->startIndex = (int) $jsonResponse['start_index'];
        $this->totalResults = (int) $jsonResponse['total_results'];
        $this->items = [];
        foreach ($jsonResponse['items'] as $item) {
            $this->items[] = new Appointment($item);
        }
    }
    /*
    {
    }
     */
}