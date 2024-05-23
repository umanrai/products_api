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
    /** The ID of the manufacutrer */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /** The name of the manufacutrer */
    #[ORM\Column(length: 50)]
    private ?string $name = null;

    /** The description of the manufacutrer */
    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    /** The countryCode of the manufacutrer */
    #[ORM\Column(length: 50)]
    private ?string $countryCode = null;

    /** The date that the manufacutrer was listed */
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $listedDate = null;

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

    public function getListedDate(): ?\DateTimeInterface
    {
        return $this->listedDate;
    }

    public function setListedDate(\DateTimeInterface $listedDate): static
    {
        $this->listedDate = $listedDate;

        return $this;
    }

}
