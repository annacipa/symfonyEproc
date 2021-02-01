<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table (name="post")
 */
class Post
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
    private $number;
    /**
     * @return mixed
     */
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
     * @param mixed $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
    }
}