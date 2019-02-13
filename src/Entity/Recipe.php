<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeRepository")
 */
class Recipe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $optimalTemperature;

    /**
     * @ORM\Column(type="float")
     */
    private $optimalHydrometry;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOptimalTemperature(): ?float
    {
        return $this->optimalTemperature;
    }

    public function setOptimalTemperature(float $optimalTemperature): self
    {
        $this->optimalTemperature = $optimalTemperature;

        return $this;
    }

    public function getOptimalHydrometry(): ?float
    {
        return $this->optimalHydrometry;
    }

    public function setOptimalHydrometry(float $optimalHydrometry): self
    {
        $this->optimalHydrometry = $optimalHydrometry;

        return $this;
    }
}
