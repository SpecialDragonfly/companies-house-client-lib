<?php
namespace CH\UseCase\CompanyOfficers;

use CH\Service;
use CH\UseCase\CompanyOfficers\Domain\OfficerList;
use Exception;

class CompanyOfficersService
{
    const ORDER_ASCENDING = 'ascending';
    const ORDER_DESCENDING = 'descending';
    const REGISTER_TYPE_DIRECTORS = 'directors';
    const REGISTER_TYPE_SECRETARIES = 'secretaries';
    const REGISTER_TYPE_LLP_MEMBERS = 'llp-members';
    const ORDER_BY_APPOINTED_ON = 'appointed_on';
    const ORDER_BY_RESIGNED_ON = 'resigned_on';
    const ORDER_BY_SURNAME = 'surname';

    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * @param string $companyNumber
     * @param int $itemsPerPage
     * @param string|null $registerType
     * @param string|null $orderBy
     * @param string $orderDirection
     * @param int $startIndex
     * @return OfficerList
     * @throws Exception
     */
    public function list(
        string $companyNumber,
        int $itemsPerPage,
        ?string $registerType,
        ?string $orderBy,
        string $orderDirection = 'ascending',
        int $startIndex = 0
    ) : OfficerList {
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
        if ($orderBy !== null &&
            in_array($orderBy, [static::ORDER_BY_APPOINTED_ON, static::ORDER_BY_RESIGNED_ON, static::ORDER_BY_SURNAME])
        ) {
            if ($orderDirection === static::ORDER_DESCENDING) {
                $orderBy = '-'.$orderBy;
            }
            $options['order_by'] = $orderBy;
        }
        try {
            $data = $this->service->send('/company/' . $companyNumber . '/officers', $options);
            return new OfficerList($data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }
}