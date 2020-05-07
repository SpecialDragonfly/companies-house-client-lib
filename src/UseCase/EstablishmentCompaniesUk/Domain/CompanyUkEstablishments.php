<?php
namespace CH\UseCase\EstablishmentCompaniesUk\Domain;

class CompanyUkEstablishments
{
    /**
     * @var Establishment[]
     */
    private $establishments;
    /**
     * @var array<string, string>
     */
    private $links;
    /**
     * @var string
     */
    private $kind;
    /**
     * @var string
     */
    private $etag;

    public function __construct(array $jsonResponse)
    {
        $this->etag = $jsonResponse['etag'];
        $this->kind = $jsonResponse['kind'];
        $this->links = $jsonResponse['links'];
        $this->establishments = $this->parseEstablishments($jsonResponse['items']);
    }

    private function parseEstablishments($items)
    {
        $establishments = [];
        foreach ($items as $item) {
            $establishments[] = new Establishment(
                $item['company_name'],
                $item['company_number'],
                $item['company_status'],
                $item['links'],
                $item['locality']
            );
        }
        return $establishments;
    }

    /**
     * @return Establishment[]
     */
    public function getEstablishments(): array
    {
        return $this->establishments;
    }

    /**
     * @return array<string, string>
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @return string
     */
    public function getEtag(): string
    {
        return $this->etag;
    }
}