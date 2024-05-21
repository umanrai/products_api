<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;


// A Manufacturer
#[ApiResource]
class Manufacturer
{
    /** The id of the manufacturer */
    private ?int $id = null;

    /** The name of the manufacturer */
    private string $name = '';

    /** The description of the manufacturer */
    private string $description = '';

    /** The country code of the manufacturer */
    private string $countryCOde = '';

    /** The date that the manufacturer was listed */
    private ?\DateTimeInterface $listedDate = null;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCountryCOde(): string
    {
        return $this->countryCOde;
    }

    /**
     * @param string $countryCOde
     */
    public function setCountryCOde(string $countryCOde): void
    {
        $this->countryCOde = $countryCOde;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getListedDate(): ?\DateTimeInterface
    {
        return $this->listedDate;
    }

    /**
     * @param \DateTimeInterface|null $listedDate
     */
    public function setListedDate(?\DateTimeInterface $listedDate): void
    {
        $this->listedDate = $listedDate;
    }

}
