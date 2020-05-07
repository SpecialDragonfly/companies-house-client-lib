<?php
namespace CH\UseCase\CompanyOfficers;

use CH\Service;
use CH\UseCase\CompanyOfficers\Domain\OfficerList;

class CompanyOfficersService
{
    const ORDER_ASCENDING = 'ascending';
    const ORDER_DESCENDING = 'descending';
    const REGISTER_TYPE_DIRECTORS = 'directors';
    const REGISTER_TYPE_SECRETARIES = 'secretaries';
    const REGISTER_TYPE_LLP_MEMBERS = 'llp-members';

    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function list(
        string $companyNumber,
        int $itemsPerPage,
        ?string $registerType,
        ?string $orderBy,
        string $orderDirection = 'ascending',
        int $startIndex = 0
    ) {
        $options = [
            'start_index' => $startIndex,
            'items_per_page' => $itemsPerPage
        ];

        if ($registerType !== null &&
            in_array(
                $registerType,
                [
                    static::REGISTER_TYPE_DIRECTORS,
                    static::REGISTER_TYPE_SECRETARIES,
                    static::REGISTER_TYPE_LLP_MEMBERS
                ]
            )
        ) {
            $options['register_type'] = $registerType;
            $options['register_view'] = 'true';
        }
        if ($orderBy !== null && in_array($orderBy, ['appointed_on', 'resigned_on', 'surname'])) {
            if ($orderDirection === static::ORDER_DESCENDING) {
                $orderBy = '-'.$orderBy;
            }
            $options['order_by'] = $orderBy;
        }
        return new OfficerList($this->service->send('/company/'.$companyNumber.'/officers', $options));
    }
}