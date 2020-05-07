<?php
namespace CH\UseCase\CompanyExemptions\Domain;

class ExemptionsTimescale
{
    private $exemptFrom;
    private $exemptTo;

    public function __construct($exemptFrom, $exemptTo = null)
    {
        $this->exemptFrom = $exemptFrom;
        $this->exemptTo = $exemptTo;
    }
}