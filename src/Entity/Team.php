<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamRepository")
 */
class Team
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Championship", inversedBy="teams")
     * @ORM\JoinColumn(nullable=false)
     */
    private $championship;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Match", mappedBy="teams")
     */
    private $matches;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Competition", inversedBy="teams")
     */
    private $competition;

    public function __construct()
    {
        $this->matches = new ArrayCollection();
        $this->competition = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getChampionship(): ?Championship
    {
        return $this->championship;
    }

    public function setChampionship(?Championship $championship): self
    {
        $this->championship = $championship;

        return $this;
    }

    /**
     * @return Collection|Match[]
     */
    public function getMatches(): Collection
    {
        return $this->matches;
    }

    public function addMatch(Match $match): self
    {
        if (!$this->matches->contains($match)) {
            $this->matches[] = $match;
            $match->addTeam($this);
        }

        return $this;
    }

    public function removeMatch(Match $match): self
    {
        if ($this->matches->contains($match)) {
            $this->matches->removeElement($match);
            $match->removeTeam($this);
        }

        return $this;
    }

    /**
     * @return Collection|Competition[]
     */
    public function getCompetition(): Collection
    {
        return $this->competition;
    }

    public function addCompetition(Competition $competition): self
    {
        if (!$this->competition->contains($competition)) {
            $this->competition[] = $competition;
        }

        return $this;
    }

    public function removeCompetition(Competition $competition): self
    {
        if ($this->competition->contains($competition)) {
            $this->competition->removeElement($competition);
        }

        return $this;
    }
}
