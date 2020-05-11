<?php
namespace CH\UseCase\Charges\Domain;

class ScottishAlterations
{
    /**
     * @var bool
     */
    private $hasAlterationsToOrder;
    /**
     * @var bool
     */
    private $hasAlterationsToProhibitions;
    /**
     * @var bool
     */
    private $hasRestrictingProvisison;

    public function __construct(
        bool $hasAlterationsToOrder,
        bool $hasAlterationsToProhibitions,
        bool $hasRestrictingProvisison
    ) {
        $this->hasAlterationsToOrder = $hasAlterationsToOrder;
        $this->hasAlterationsToProhibitions = $hasAlterationsToProhibitions;
        $this->hasRestrictingProvisison = $hasRestrictingProvisison;
    }

    /**
     * @return bool
     */
    public function isHasAlterationsToOrder(): bool
    {
        return $this->hasAlterationsToOrder;
    }

    /**
     * @return bool
     */
    public function isHasAlterationsToProhibitions(): bool
    {
        return $this->hasAlterationsToProhibitions;
    }

    /**
     * @return bool
     */
    public function isHasRestrictingProvisison(): bool
    {
        return $this->hasRestrictingProvisison;
    }
}