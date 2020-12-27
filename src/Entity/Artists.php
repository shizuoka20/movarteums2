<?php

namespace App\Entity;

use App\Repository\ArtistsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtistsRepository::class)
 */
class Artists
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageProfile;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateOfBirth;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numberOfWorks;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $workForSale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getImageProfile(): ?string
    {
        return $this->imageProfile;
    }

    public function setImageProfile(string $imageProfile): self
    {
        $this->imageProfile = $imageProfile;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(\DateTimeInterface $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getNumberOfWorks(): ?int
    {
        return $this->numberOfWorks;
    }

    public function setNumberOfWorks(?int $numberOfWorks): self
    {
        $this->numberOfWorks = $numberOfWorks;

        return $this;
    }

    public function getWorkForSale(): ?int
    {
        return $this->workForSale;
    }

    public function setWorkForSale(?int $workForSale): self
    {
        $this->workForSale = $workForSale;

        return $this;
    }
}
