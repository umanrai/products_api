<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TinyPuppyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TinyPuppyRepository::class)]
#[ApiResource]
class TinyPuppy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    /** This is sachin. */
    #[ORM\Column(length: 255)]
    private ?string $sachin = null;

    #[ORM\Column(length: 255)]
    private ?string $uman = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSachin(): ?string
    {
        return $this->sachin;
    }

    public function setSachin(string $sachin): static
    {
        $this->sachin = $sachin;

        return $this;
    }

    public function getUman(): ?string
    {
        return $this->uman;
    }

    public function setUman(string $uman): static
    {
        $this->uman = $uman;

        return $this;
    }
}
