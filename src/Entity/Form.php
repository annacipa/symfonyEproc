<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table (name="forms")
 */

class Form
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column (type="integer")
     */
    private $id;
    /**
     * @ORM\Column (type="string",length=255)
     */
    private $title;
    /**
     * @ORM\Column (type="string")
     */
    private $description;
    /**
     * @ORM\Column (type="integer")
     */
    private $fondlimit;
    /**
     * @ORM\Column (type="string")
     */
    private $adresedorezimi;
    /**
     * @ORM\Column (type="date")
     */
    private $datehapje;
    /**
     * @ORM\Column (type="date")
     */
    private $datembyllje;

    /**
     * @ORM\Column (type="string")
     */
    private $licence;




    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getAdresedorezimi()
    {
        return $this->adresedorezimi;
    }

    /**
     * @return mixed
     */
    public function getDatehapje()
    {
        return $this->datehapje;
    }

    /**
     * @return mixed
     */
    public function getDatembyllje()
    {
        return $this->datembyllje;
    }

    /**
     * @return mixed
     */
    public function getFondlimit()
    {
        return $this->fondlimit;
    }

    /**
     * @return mixed
     */
    public function getLicence()
    {
        return $this->licence;
    }

    /**
     * @param mixed $adresedorezimi
     */
    public function setAdresedorezimi($adresedorezimi): void
    {
        $this->adresedorezimi = $adresedorezimi;
    }

    /**
     * @param mixed $datehapje
     */
    public function setDatehapje($datehapje): void
    {
        $this->datehapje = $datehapje;
    }

    /**
     * @param mixed $datembyllje
     */
    public function setDatembyllje($datembyllje): void
    {
        $this->datembyllje = $datembyllje;
    }

    /**
     * @param mixed $fondlimit
     */
    public function setFondlimit($fondlimit): void
    {
        $this->fondlimit = $fondlimit;
    }

    /**
     * @param mixed $licence
     */
    public function setLicence($licence): void
    {
        $this->licence = $licence;
    }
}