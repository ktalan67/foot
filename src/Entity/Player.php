<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlayerRepository")
 */
class Player
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
    private $account_name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $match_win;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $match_lose;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $match_draw;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $redcard;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Competition", inversedBy="players")
     */
    private $competition;

    public function __construct()
    {
        $this->competition = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccountName(): ?string
    {
        return $this->account_name;
    }

    public function setAccountName(string $account_name): self
    {
        $this->account_name = $account_name;

        return $this;
    }

    public function getMatchWin(): ?int
    {
        return $this->match_win;
    }

    public function setMatchWin(?int $match_win): self
    {
        $this->match_win = $match_win;

        return $this;
    }

    public function getMatchLose(): ?int
    {
        return $this->match_lose;
    }

    public function setMatchLose(?int $match_lose): self
    {
        $this->match_lose = $match_lose;

        return $this;
    }

    public function getMatchDraw(): ?int
    {
        return $this->match_draw;
    }

    public function setMatchDraw(?int $match_draw): self
    {
        $this->match_draw = $match_draw;

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
