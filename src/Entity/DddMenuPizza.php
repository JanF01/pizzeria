<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DddMenuPizzaRepository")
 */
class DddMenuPizza
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $groupid;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $sprice;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $mprice;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lprice;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="smallint")
     */
    private $public;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $dodal;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $foto;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $part;

    /**
     * @ORM\Column(type="smallint")
     */
    private $papryczki;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupid(): ?int
    {
        return $this->groupid;
    }

    public function setGroupid(?int $groupid): self
    {
        $this->groupid = $groupid;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSprice(): ?float
    {
        return $this->sprice;
    }

    public function setSprice(?float $sprice): self
    {
        $this->sprice = $sprice;

        return $this;
    }

    public function getMprice(): ?float
    {
        return $this->mprice;
    }

    public function setMprice(?float $mprice): self
    {
        $this->mprice = $mprice;

        return $this;
    }

    public function getLprice(): ?float
    {
        return $this->lprice;
    }

    public function setLprice(?float $lprice): self
    {
        $this->lprice = $lprice;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPublic(): ?int
    {
        return $this->public;
    }

    public function setPublic(int $public): self
    {
        $this->public = $public;

        return $this;
    }

    public function getDodal(): ?string
    {
        return $this->dodal;
    }

    public function setDodal(string $dodal): self
    {
        $this->dodal = $dodal;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getPart(): ?string
    {
        return $this->part;
    }

    public function setPart(?string $part): self
    {
        $this->part = $part;

        return $this;
    }

    public function getPapryczki(): ?int
    {
        return $this->papryczki;
    }

    public function setPapryczki(int $papryczki): self
    {
        $this->papryczki = $papryczki;

        return $this;
    }
}
