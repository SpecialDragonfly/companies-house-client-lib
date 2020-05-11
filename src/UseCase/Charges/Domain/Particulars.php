<?php
namespace CH\UseCase\Charges\Domain;

class Particulars
{
    /**
     * @var bool
     */
    private $chargorActingAsBareTrustee;
    /**
     * @var bool
     */
    private $containsFixedCharge;
    /**
     * @var bool
     */
    private $containsFloatingCharge;
    /**
     * @var bool
     */
    private $containsNegativePledge;
    /**
     * @var string
     */
    private $description;
    /**
     * @var bool
     */
    private $floatingChargeCoversAll;
    /**
     * @var string
     */
    private $type;

    public function __construct(
        bool $chargorActingAsBareTrustee,
        bool $containsFixedCharge,
        bool $containsFloatingCharge,
        bool $containsNegativePledge,
        string $description,
        bool $floatingChargeCoversAll,
        string $type
    ) {
        $this->chargorActingAsBareTrustee = $chargorActingAsBareTrustee;
        $this->containsFixedCharge = $containsFixedCharge;
        $this->containsFloatingCharge = $containsFloatingCharge;
        $this->containsNegativePledge = $containsNegativePledge;
        $this->description = $description;
        $this->floatingChargeCoversAll = $floatingChargeCoversAll;
        $this->type = $type;
    }

    /**
     * @return bool
     */
    public function isChargorActingAsBareTrustee(): bool
    {
        return $this->chargorActingAsBareTrustee;
    }

    /**
     * @return bool
     */
    public function isContainsFixedCharge(): bool
    {
        return $this->containsFixedCharge;
    }

    /**
     * @return bool
     */
    public function isContainsFloatingCharge(): bool
    {
        return $this->containsFloatingCharge;
    }

    /**
     * @return bool
     */
    public function isContainsNegativePledge(): bool
    {
        return $this->containsNegativePledge;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isFloatingChargeCoversAll(): bool
    {
        return $this->floatingChargeCoversAll;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}