<?php
namespace CH\UseCase\OfficerDisqualifications\Domain;

class NaturalDisqualification
{
    /**
     * @var Disqualification[]
     */
    private $disqualifications;
    /**
     * @var Permission[]
     */
    private $permissionsToAct;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $surname;
    /**
     * @var string
     */
    private $otherForenames;
    /**
     * @var string
     */
    private $nationality;
    /**
     * @var array
     */
    private $links;
    /**
     * @var string
     */
    private $kind;
    /**
     * @var string
     */
    private $honours;
    /**
     * @var string
     */
    private $forename;
    /**
     * @var string
     */
    private $etag;
    /**
     * @var string
     */
    private $dateOfBirth;

    public function __construct(array $jsonResponse)
    {
        $this->dateOfBirth = $jsonResponse['date_of_birth'];
        $this->etag = $jsonResponse['etag'];
        $this->forename = $jsonResponse['forename'];
        $this->honours = $jsonResponse['honours'];
        $this->kind = $jsonResponse['kind'];
        $this->links = $jsonResponse['links'];
        $this->nationality = $jsonResponse['nationality'];
        $this->otherForenames = $jsonResponse['other_forenames'];
        $this->surname = $jsonResponse['surname'];
        $this->title = $jsonResponse['title'];
        $this->permissionsToAct = [];
        foreach ($jsonResponse['permissions_to_act'] as $permission) {
            $this->permissionsToAct[] = new Permission($jsonResponse['permissions_to_act']);

        }
        $this->disqualifications = [];
        foreach ($jsonResponse['disqualifications'] as $disqualification) {
            $this->disqualifications[] = new Disqualification($disqualification);
        }
    }

    /**
     * @return Disqualification[]
     */
    public function getDisqualifications(): array
    {
        return $this->disqualifications;
    }

    /**
     * @return Permission[]
     */
    public function getPermissionsToAct(): array
    {
        return $this->permissionsToAct;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getOtherForenames(): string
    {
        return $this->otherForenames;
    }

    /**
     * @return string
     */
    public function getNationality(): string
    {
        return $this->nationality;
    }

    /**
     * @return array
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
    public function getHonours(): string
    {
        return $this->honours;
    }

    /**
     * @return string
     */
    public function getForename(): string
    {
        return $this->forename;
    }

    /**
     * @return string
     */
    public function getEtag(): string
    {
        return $this->etag;
    }

    /**
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }
}