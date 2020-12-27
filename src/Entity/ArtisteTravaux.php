<?php

namespace App\Entity;

use App\Repository\ArtisteTravauxRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtisteTravauxRepository::class)
 */
class ArtisteTravaux
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
    private $imageWorkOne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleWorkOne;

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
    private $materialOneCorrect;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dimensionOne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageWorkTwo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleWorkTwo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $yearWorkTwo;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceTwo;

    /**
     * @ORM\Column(type="text")
     */
    private $introductionWorkTwo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $materialTwo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dimensionTwo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageWorkThree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleWorkThree;

    /**
     * @ORM\Column(type="datetime")
     */
    private $yearWorkThree;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceThree;

    /**
     * @ORM\Column(type="text")
     */
    private $introductionWorkthree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $materialThree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dimensionThree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageWorkFour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleWorkFour;

    /**
     * @ORM\Column(type="datetime")
     */
    private $yearWorkFour;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceFour;

    /**
     * @ORM\Column(type="text")
     */
    private $introductionWorkFour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $materialFour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dimensionFour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageWorkFive;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleWorkFive;

    /**
     * @ORM\Column(type="datetime")
     */
    private $yearWorkFive;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceFive;

    /**
     * @ORM\Column(type="text")
     */
    private $introductionWorkFive;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $materialFive;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dimensionFive;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTitleWorkOne(): ?string
    {
        return $this->titleWorkOne;
    }

    public function setTitleWorkOne(string $titleWorkOne): self
    {
        $this->titleWorkOne = $titleWorkOne;

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

    public function getMaterialOneCorrect(): ?string
    {
        return $this->materialOneCorrect;
    }

    public function setMaterialOneCorrect(string $materialOneCorrect): self
    {
        $this->materialOneCorrect = $materialOneCorrect;

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

    public function getImageWorkTwo(): ?string
    {
        return $this->imageWorkTwo;
    }

    public function setImageWorkTwo(string $imageWorkTwo): self
    {
        $this->imageWorkTwo = $imageWorkTwo;

        return $this;
    }

    public function getTitleWorkTwo(): ?string
    {
        return $this->titleWorkTwo;
    }

    public function setTitleWorkTwo(string $titleWorkTwo): self
    {
        $this->titleWorkTwo = $titleWorkTwo;

        return $this;
    }

    public function getYearWorkTwo(): ?\DateTimeInterface
    {
        return $this->yearWorkTwo;
    }

    public function setYearWorkTwo(\DateTimeInterface $yearWorkTwo): self
    {
        $this->yearWorkTwo = $yearWorkTwo;

        return $this;
    }

    public function getPriceTwo(): ?int
    {
        return $this->priceTwo;
    }

    public function setPriceTwo(int $priceTwo): self
    {
        $this->priceTwo = $priceTwo;

        return $this;
    }

    public function getIntroductionWorkTwo(): ?string
    {
        return $this->introductionWorkTwo;
    }

    public function setIntroductionWorkTwo(string $introductionWorkTwo): self
    {
        $this->introductionWorkTwo = $introductionWorkTwo;

        return $this;
    }

    public function getMaterialTwo(): ?string
    {
        return $this->materialTwo;
    }

    public function setMaterialTwo(string $materialTwo): self
    {
        $this->materialTwo = $materialTwo;

        return $this;
    }

    public function getDimensionTwo(): ?string
    {
        return $this->dimensionTwo;
    }

    public function setDimensionTwo(string $dimensionTwo): self
    {
        $this->dimensionTwo = $dimensionTwo;

        return $this;
    }

    public function getImageWorkThree(): ?string
    {
        return $this->imageWorkThree;
    }

    public function setImageWorkThree(string $imageWorkThree): self
    {
        $this->imageWorkThree = $imageWorkThree;

        return $this;
    }

    public function getTitleWorkThree(): ?string
    {
        return $this->titleWorkThree;
    }

    public function setTitleWorkThree(string $titleWorkThree): self
    {
        $this->titleWorkThree = $titleWorkThree;

        return $this;
    }

    public function getYearWorkThree(): ?\DateTimeInterface
    {
        return $this->yearWorkThree;
    }

    public function setYearWorkThree(\DateTimeInterface $yearWorkThree): self
    {
        $this->yearWorkThree = $yearWorkThree;

        return $this;
    }

    public function getPriceThree(): ?int
    {
        return $this->priceThree;
    }

    public function setPriceThree(int $priceThree): self
    {
        $this->priceThree = $priceThree;

        return $this;
    }

    public function getIntroductionWorkthree(): ?string
    {
        return $this->introductionWorkthree;
    }

    public function setIntroductionWorkthree(string $introductionWorkthree): self
    {
        $this->introductionWorkthree = $introductionWorkthree;

        return $this;
    }

    public function getMaterialThree(): ?string
    {
        return $this->materialThree;
    }

    public function setMaterialThree(string $materialThree): self
    {
        $this->materialThree = $materialThree;

        return $this;
    }

    public function getDimensionThree(): ?string
    {
        return $this->dimensionThree;
    }

    public function setDimensionThree(string $dimensionThree): self
    {
        $this->dimensionThree = $dimensionThree;

        return $this;
    }

    public function getImageWorkFour(): ?string
    {
        return $this->imageWorkFour;
    }

    public function setImageWorkFour(string $imageWorkFour): self
    {
        $this->imageWorkFour = $imageWorkFour;

        return $this;
    }

    public function getTitleWorkFour(): ?string
    {
        return $this->titleWorkFour;
    }

    public function setTitleWorkFour(string $titleWorkFour): self
    {
        $this->titleWorkFour = $titleWorkFour;

        return $this;
    }

    public function getYearWorkFour(): ?\DateTimeInterface
    {
        return $this->yearWorkFour;
    }

    public function setYearWorkFour(\DateTimeInterface $yearWorkFour): self
    {
        $this->yearWorkFour = $yearWorkFour;

        return $this;
    }

    public function getPriceFour(): ?int
    {
        return $this->priceFour;
    }

    public function setPriceFour(int $priceFour): self
    {
        $this->priceFour = $priceFour;

        return $this;
    }

    public function getIntroductionWorkFour(): ?string
    {
        return $this->introductionWorkFour;
    }

    public function setIntroductionWorkFour(string $introductionWorkFour): self
    {
        $this->introductionWorkFour = $introductionWorkFour;

        return $this;
    }

    public function getMaterialFour(): ?string
    {
        return $this->materialFour;
    }

    public function setMaterialFour(string $materialFour): self
    {
        $this->materialFour = $materialFour;

        return $this;
    }

    public function getDimensionFour(): ?string
    {
        return $this->dimensionFour;
    }

    public function setDimensionFour(string $dimensionFour): self
    {
        $this->dimensionFour = $dimensionFour;

        return $this;
    }

    public function getImageWorkFive(): ?string
    {
        return $this->imageWorkFive;
    }

    public function setImageWorkFive(string $imageWorkFive): self
    {
        $this->imageWorkFive = $imageWorkFive;

        return $this;
    }

    public function getTitleWorkFive(): ?string
    {
        return $this->titleWorkFive;
    }

    public function setTitleWorkFive(string $titleWorkFive): self
    {
        $this->titleWorkFive = $titleWorkFive;

        return $this;
    }

    public function getYearWorkFive(): ?\DateTimeInterface
    {
        return $this->yearWorkFive;
    }

    public function setYearWorkFive(\DateTimeInterface $yearWorkFive): self
    {
        $this->yearWorkFive = $yearWorkFive;

        return $this;
    }

    public function getPriceFive(): ?int
    {
        return $this->priceFive;
    }

    public function setPriceFive(int $priceFive): self
    {
        $this->priceFive = $priceFive;

        return $this;
    }

    public function getIntroductionWorkFive(): ?string
    {
        return $this->introductionWorkFive;
    }

    public function setIntroductionWorkFive(string $introductionWorkFive): self
    {
        $this->introductionWorkFive = $introductionWorkFive;

        return $this;
    }

    public function getMaterialFive(): ?string
    {
        return $this->materialFive;
    }

    public function setMaterialFive(string $materialFive): self
    {
        $this->materialFive = $materialFive;

        return $this;
    }

    public function getDimensionFive(): ?string
    {
        return $this->dimensionFive;
    }

    public function setDimensionFive(string $dimensionFive): self
    {
        $this->dimensionFive = $dimensionFive;

        return $this;
    }
}
