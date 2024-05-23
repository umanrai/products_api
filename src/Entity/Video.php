<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Controller\VideoUploadController;
use Symfony\Component\HttpFoundation\File\File;
use App\Repository\VideoRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use ApiPlatform\Metadata\Post;

#[ORM\Entity(repositoryClass: VideoRepository::class)]
#[ApiResource(
    operations: [
        new \ApiPlatform\Metadata\Post(
            controller: VideoUploadController::class,
            deserialize: false
        )
    ]
)]
#[Vich\Uploadable]
class Video
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;


    #[Vich\UploadableField(mapping: 'videos_upload', fileNameProperty: 'name')]
    private ?File $file = null;
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }


    public function getFile(): ?File
    {
        return $this->file;
    }


    public function setFile(?File $file = null): self
    {
        $this->file = $file;
        if ($file) {
            // It's a good practice to update the updatedAt property whenever the file changes
            $this->updatedAt = new \DateTimeImmutable();
        }
        return $this;
    }



    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
