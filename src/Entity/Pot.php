<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PotRepository")
 */
class Pot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Gardener", inversedBy="pots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gardener;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Plant", mappedBy="pot")
     */
    private $plant;

    public function __construct()
    {
        $this->plant = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getGardener(): ?Gardener
    {
        return $this->gardener;
    }

    public function setGardener(?Gardener $gardener): self
    {
        $this->gardener = $gardener;

        return $this;
    }

    /**
     * @return Collection|Plant[]
     */
    public function getPlant(): Collection
    {
        return $this->plant;
    }

    public function addPlant(Plant $plant): self
    {
        if (!$this->plant->contains($plant)) {
            $this->plant[] = $plant;
            $plant->setPot($this);
        }

        return $this;
    }

    public function removePlant(Plant $plant): self
    {
        if ($this->plant->contains($plant)) {
            $this->plant->removeElement($plant);
            // set the owning side to null (unless already changed)
            if ($plant->getPot() === $this) {
                $plant->setPot(null);
            }
        }

        return $this;
    }
}
