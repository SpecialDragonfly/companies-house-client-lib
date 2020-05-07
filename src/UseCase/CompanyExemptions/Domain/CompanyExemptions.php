<?php
namespace CH\UseCase\CompanyExemptions\Domain;

class CompanyExemptions
{
    /**
     * @var array
     */
    private $links;
    /**
     * @var string
     */
    private $kind;
    /**
     * @var array
     */
    private $exemptions;
    /**
     * @var string
     */
    private $etag;
    /**
     * @var Exemption|null
     */
    private $disclosureTransparency;
    /**
     * @var Exemption|null
     */
    private $pscExemptAsShares;
    /**
     * @var Exemption|null
     */
    private $pscExemptAsTradingOnRegulatedMarket;
    /**
     * @var Exemption|null
     */
    private $pscExemptAsTradingOnUkRegulatedMarket;

    public function __construct(array $jsonResponse)
    {
        $this->etag = $jsonResponse['etag'];
        $this->exemptions = $jsonResponse['exemptions'];
        $this->kind = $jsonResponse['kind'];
        $this->links = $jsonResponse['links'];
        if (array_key_exists('disclosure_transparency_rules_chapter_five_applies', $jsonResponse['exemptions'])) {
            $exemption = $jsonResponse['exemptions']['disclosure_transparency_rules_chapter_five_applies'];
            $this->disclosureTransparency = new Exemption(
                $exemption['exemption_type'],
                $this->getTimescales($exemption['items']) // exemption timescale
            );
        }
        if (array_key_exists('psc_exempt_as_shares_admitted_on_market', $jsonResponse['exemptions'])) {
            $exemption = $jsonResponse['exemptions']['psc_exempt_as_shares_admitted_on_market'];
            $this->pscExemptAsShares = new Exemption(
                $exemption['exemption_type'],
                $this->getTimescales($exemption['items']) // exemption timescale
            );
        }
        if (array_key_exists('psc_exempt_as_trading_on_regulated_market', $jsonResponse['exemptions'])) {
            $exemption = $jsonResponse['exemptions']['psc_exempt_as_trading_on_regulated_market'];
            $this->pscExemptAsTradingOnRegulatedMarket = new Exemption(
                $exemption['exemption_type'],
                $this->getTimescales($exemption['items']) // exemption timescale
            );
        }
        if (array_key_exists('psc_exempt_as_trading_on_uk_regulated_market', $jsonResponse['exemptions'])) {
            $exemption = $jsonResponse['exemptions']['psc_exempt_as_trading_on_uk_regulated_market'];
            $this->pscExemptAsTradingOnUkRegulatedMarket = new Exemption(
                $exemption['exemption_type'],
                $this->getTimescales($exemption['items']) // exemption timescale
            );
        }
    }

    /**
     * @param array<array<string, string>> $items
     * @return ExemptionsTimescale[]
     */
    private function getTimescales($items) : array
    {
        $timescales = [];
        foreach ($items as $item) {
            $timescales[] = new ExemptionsTimescale($item['exempt_from'], $item['exempt_to'] ?: '');
        }
        return $timescales;
    }

    /**
     * If present the company is a traded, DTR5 issuing company. Therefore it may be exempt from updating its PSC information.
     * @return bool
     */
    public function hasDisclosureTransparencyRulesChapterFiveAppliesExemption() : bool
    {
        return $this->disclosureTransparency !== null;
    }

    /**
     * If present the company has been or is exempt from keeping a PSC register, as it has voting shares admitted to
     * trading on a market listed in the Register of People with Significant Control Regulations 2016.
     * @return bool
     */
    public function hasPscExemptAsSharesAdmittedOnMarketExemption() : bool
    {
        return $this->pscExemptAsShares !== null;
    }

    /**
     * If present the company has been or is exempt from keeping a PSC register, as it has voting shares admitted to
     * trading on a regulated market other than the UK.
     * @return bool
     */
    public function hasPscExemptAsTradingOnRegulatedMarketExemption() : bool
    {
        return $this->pscExemptAsTradingOnRegulatedMarket !== null;
    }

    /**
     * If present the company has been or is exempt from keeping a PSC register, as it has voting shares admitted to
     * trading on a UK regulated market.
     * @return bool
     */
    public function hasPscExemptAsTradingOnUkRegulatedMarketExemption() : bool
    {
        return $this->pscExemptAsTradingOnUkRegulatedMarket !== null;
    }

    /**
     * @return Exemption|null
     */
    public function getDisclosureTransparencyRulesChapterFiveAppliesExemption(): ?Exemption
    {
        return $this->disclosureTransparency;
    }

    /**
     * @return Exemption|null
     */
    public function getPscExemptAsSharesAdmittedOnMarketExemption(): ?Exemption
    {
        return $this->pscExemptAsShares;
    }

    /**
     * @return Exemption|null
     */
    public function getPscExemptAsTradingOnRegulatedMarketExemption(): ?Exemption
    {
        return $this->pscExemptAsTradingOnRegulatedMarket;
    }

    /**
     * @return Exemption|null
     */
    public function getPscExemptAsTradingOnUkRegulatedMarketExemption(): ?Exemption
    {
        return $this->pscExemptAsTradingOnUkRegulatedMarket;
    }
}