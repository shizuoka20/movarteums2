<?php

namespace App\Entity;

use App\Repository\ArtistsDetailRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtistsDetailRepository::class)
 */
class ArtistsDetail
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
    private $numberOfWork;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $workForSale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nationality;

    /**
     * @ORM\Column(type="text")
     */
    private $introduction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notableWorks;

    /**
     * @ORM\OneToMany(targetEntity=ArtistsArtwork::class, mappedBy="title")
     */
    private $artistsArtworks;

    /**
     * @ORM\OneToMany(targetEntity=ArtistsArtwork::class, mappedBy="dimension")
     */
    private $aboutArtwork;

    public function __construct()
    {
        $this->artistsArtworks = new ArrayCollection();
        $this->aboutArtwork = new ArrayCollection();
    }

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

    public function getNumberOfWork(): ?int
    {
        return $this->numberOfWork;
    }

    public function setNumberOfWork(?int $numberOfWork): self
    {
        $this->numberOfWork = $numberOfWork;

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

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(string $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }

    public function getNotableWorks(): ?string
    {
        return $this->notableWorks;
    }

    public function setNotableWorks(string $notableWorks): self
    {
        $this->notableWorks = $notableWorks;

        return $this;
    }

    /**
     * @return Collection|ArtistsArtwork[]
     */
    public function getArtistsArtworks(): Collection
    {
        return $this->artistsArtworks;
    }

    public function addArtistsArtwork(ArtistsArtwork $artistsArtwork): self
    {
        if (!$this->artistsArtworks->contains($artistsArtwork)) {
            $this->artistsArtworks[] = $artistsArtwork;
            $artistsArtwork->setTitle($this);
        }

        return $this;
    }

    public function removeArtistsArtwork(ArtistsArtwork $artistsArtwork): self
    {
        if ($this->artistsArtworks->removeElement($artistsArtwork)) {
            // set the owning side to null (unless already changed)
            if ($artistsArtwork->getTitle() === $this) {
                $artistsArtwork->setTitle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ArtistsArtwork[]
     */
    public function getAboutArtwork(): Collection
    {
        return $this->aboutArtwork;
    }

    public function addAboutArtwork(ArtistsArtwork $aboutArtwork): self
    {
        if (!$this->aboutArtwork->contains($aboutArtwork)) {
            $this->aboutArtwork[] = $aboutArtwork;
            $aboutArtwork->setDimension($this);
        }

        return $this;
    }

    public function removeAboutArtwork(ArtistsArtwork $aboutArtwork): self
    {
        if ($this->aboutArtwork->removeElement($aboutArtwork)) {
            // set the owning side to null (unless already changed)
            if ($aboutArtwork->getDimension() === $this) {
                $aboutArtwork->setDimension(null);
            }
        }

        return $this;
    }
}
