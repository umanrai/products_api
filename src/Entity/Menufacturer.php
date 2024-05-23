<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Controller\ManufacturerController;
use App\Repository\MenufacturerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/** A manufacturer. */
#[ORM\Entity(repositoryClass: MenufacturerRepository::class)]
#[ApiResource(
    operations: [
        new \ApiPlatform\Metadata\Post(
            controller: ManufacturerController::class,
            deserialize: false
        )
    ]
)]
#[Vich\Uploadable]
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

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[Vich\UploadableField(mapping: 'images_upload', fileNameProperty: 'image')]
    private ?File $file = null;

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

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return File|null
     */
    public function getFile(): ?File
    {
        return $this->file;
    }

    /**
     * @param File|null $file
     */
    public function setFile(?File $file): self
    {
        $this->file = $file;
        return $this;
    }


}
