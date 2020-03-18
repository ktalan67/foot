<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchRepository")
 */
class Match
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $score;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fouls;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $penalty;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $yellowcard;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $redcard;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Team", inversedBy="matches")
     */
    private $teams;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Stade")
     */
    private $stade;

    public function __construct()
    {
        $this->teams = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getFouls(): ?int
    {
        return $this->fouls;
    }

    public function setFouls(?int $fouls): self
    {
        $this->fouls = $fouls;

        return $this;
    }

    public function getPenalty(): ?int
    {
        return $this->penalty;
    }

    public function setPenalty(?int $penalty): self
    {
        $this->penalty = $penalty;

        return $this;
    }

    public function getYellowcard(): ?int
    {
        return $this->yellowcard;
    }

    public function setYellowcard(?int $yellowcard): self
    {
        $this->yellowcard = $yellowcard;

        return $this;
    }

    public function getRedcard(): ?int
    {
        return $this->redcard;
    }

    public function setRedcard(?int $redcard): self
    {
        $this->redcard = $redcard;

        return $this;
    }

    /**
     * @return Collection|Team[]
     */
    public function getTeams(): Collection
    {
        return $this->teams;
    }

    public function addTeam(Team $team): self
    {
        if (!$this->teams->contains($team)) {
            $this->teams[] = $team;
        }

        return $this;
    }

    public function removeTeam(Team $team): self
    {
        if ($this->teams->contains($team)) {
            $this->teams->removeElement($team);
        }

        return $this;
    }

    public function getStade(): ?Stade
    {
        return $this->stade;
    }

    public function setStade(?Stade $stade): self
    {
        $this->stade = $stade;

        return $this;
    }
}
