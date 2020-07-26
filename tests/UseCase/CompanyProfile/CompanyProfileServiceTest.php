<?php

namespace UseCase\CompanyProfile;

use CH\Service;
use CH\UseCase\CompanyProfile\CompanyProfileService;
use PHPUnit\Framework\TestCase;

class CompanyProfileServiceTest extends TestCase
{
    /**
     * @covers \CH\UseCase\CompanyProfile\CompanyProfileService::get
     */
    public function testGetMinimum() {
        $return = <<<JSON
{
    "can_file" : true,
    "company_name" : "ABC",
    "company_number" : "123",
    "jurisdiction" : "test-jurisdiction",
    "links" : {
        "self" : "localhost"
    },
   "type" : "some_type"
}
JSON;
        $data = json_decode($return, true);
        $mockService = $this->createMock(Service::class);
        $mockService->expects($this->once())->method('send')->will($this->returnValue($data));
        $service = new CompanyProfileService($mockService);
        $response = $service->get("ABC");
        $this->assertEquals(true, $response->isCanFile());
        $this->assertEquals("ABC", $response->getCompanyName());
        $this->assertEquals("123", $response->getCompanyNumber());
        $this->assertEquals("test-jurisdiction", $response->getJurisdiction());
        $this->assertEquals("some_type", $response->getType());
        $this->assertEquals('{"self":"localhost"}', json_encode($response->getLinks()));
        $this->assertNull($response->isCommunityInterestCompany());
        $this->assertNull($response->getRegisteredOfficeAddress());
        $this->assertNull($response->getAccounts());
        $this->assertNull($response->getAnnualReturn());
        $this->assertNull($response->getBranchCompanyDetails());
        $this->assertNull($response->getCompanyStatus());
        $this->assertNull($response->getCompanyStatusDetail());
        $this->assertNull($response->getConfirmationStatement());
        $this->assertNull($response->getDateOfCessation());
        $this->assertNull($response->getDateOfCreation());
        $this->assertNull($response->getEtag());
        $this->assertNull($response->getExternalRegistrationNumber());
        $this->assertNull($response->getForeignCompanyDetails());
        $this->assertNull($response->getLastFullMembersListDate());
        $this->assertNull($response->getPartialDataAvailable());
        $this->assertNull($response->getPreviousCompanyNames());
        $this->assertNull($response->getSicCodes());
        $this->assertNull($response->getSubtype());
        $this->assertNull($response->isHasBeenLiquidated());
        $this->assertNull($response->isHasCharges());
        $this->assertNull($response->isHasInsolvencyHistory());
        $this->assertNull($response->isRegisteredOfficeIsInDispute());
        $this->assertNull($response->isUndeliverableRegisteredOfficeAddress());
    }
}
