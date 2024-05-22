<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\MenufacturerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** A manufacutrer. */
#[ORM\Entity(repositoryClass: MenufacturerRepository::class)]
#[ApiResource]
class Menufacturer
{
    /** The ID of this Manufacutrer. */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /** The nmae of this Manufacutrer. */
    #[ORM\Column(length: 50)]
    private ?string $name = null;

    /** The description of this Manufacutrer. */
    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    /** The countryCode of this Manufacutrer. */
    #[ORM\Column(length: 50)]
    private ?string $countryCode = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): static
    {
        $this->countryCode = $countryCode;

        return $this;
    }
}
