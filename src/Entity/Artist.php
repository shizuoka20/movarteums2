<?php

namespace App\Entity;

use App\Repository\ArtistRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtistRepository::class)
 */
class Artist
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
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $artistEmail;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateOfBirth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $website;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socialMedia;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $homeAdress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ShippingAdress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageProfile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationality;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberOfWork;

    /**
     * @ORM\Column(type="text")
     */
    private $introductionArtist;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberOfWorkForSale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageWorkOne;

    /**
     * @ORM\Column(type="datetime")
     */
    private $yearWorkOne;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceOne;

    /**
     * @ORM\Column(type="text")
     */
    private $introductionWorkOne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $materialOne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dimensionOne;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getArtistEmail(): ?string
    {
        return $this->artistEmail;
    }

    public function setArtistEmail(string $artistEmail): self
    {
        $this->artistEmail = $artistEmail;

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

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getSocialMedia(): ?string
    {
        return $this->socialMedia;
    }

    public function setSocialMedia(string $socialMedia): self
    {
        $this->socialMedia = $socialMedia;

        return $this;
    }

    public function getHomeAdress(): ?string
    {
        return $this->homeAdress;
    }

    public function setHomeAdress(string $homeAdress): self
    {
        $this->homeAdress = $homeAdress;

        return $this;
    }

    public function getShippingAdress(): ?string
    {
        return $this->ShippingAdress;
    }

    public function setShippingAdress(string $ShippingAdress): self
    {
        $this->ShippingAdress = $ShippingAdress;

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

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getNumberOfWork(): ?int
    {
        return $this->numberOfWork;
    }

    public function setNumberOfWork(int $numberOfWork): self
    {
        $this->numberOfWork = $numberOfWork;

        return $this;
    }

    public function getIntroductionArtist(): ?string
    {
        return $this->introductionArtist;
    }

    public function setIntroductionArtist(string $introductionArtist): self
    {
        $this->introductionArtist = $introductionArtist;

        return $this;
    }

    public function getNumberOfWorkForSale(): ?int
    {
        return $this->numberOfWorkForSale;
    }

    public function setNumberOfWorkForSale(int $numberOfWorkForSale): self
    {
        $this->numberOfWorkForSale = $numberOfWorkForSale;

        return $this;
    }

    public function getImageWorkOne(): ?string
    {
        return $this->imageWorkOne;
    }

    public function setImageWorkOne(string $imageWorkOne): self
    {
        $this->imageWorkOne = $imageWorkOne;

        return $this;
    }

    public function getYearWorkOne(): ?\DateTimeInterface
    {
        return $this->yearWorkOne;
    }

    public function setYearWorkOne(\DateTimeInterface $yearWorkOne): self
    {
        $this->yearWorkOne = $yearWorkOne;

        return $this;
    }

    public function getPriceOne(): ?int
    {
        return $this->priceOne;
    }

    public function setPriceOne(int $priceOne): self
    {
        $this->priceOne = $priceOne;

        return $this;
    }

    public function getIntroductionWorkOne(): ?string
    {
        return $this->introductionWorkOne;
    }

    public function setIntroductionWorkOne(string $introductionWorkOne): self
    {
        $this->introductionWorkOne = $introductionWorkOne;

        return $this;
    }

    public function getMaterialOne(): ?string
    {
        return $this->materialOne;
    }

    public function setMaterialOne(string $materialOne): self
    {
        $this->materialOne = $materialOne;

        return $this;
    }

    public function getDimensionOne(): ?string
    {
        return $this->dimensionOne;
    }

    public function setDimensionOne(string $dimensionOne): self
    {
        $this->dimensionOne = $dimensionOne;

        return $this;
    }
}
