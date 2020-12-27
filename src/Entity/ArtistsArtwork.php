<?php

namespace App\Entity;

use App\Repository\ArtistsArtworkRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtistsArtworkRepository::class)
 */
class ArtistsArtwork
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=artistsDetail::class, inversedBy="artistsArtworks")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $material;

    /**
     * @ORM\ManyToOne(targetEntity=artistsDetail::class, inversedBy="artistsArtworks")
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity=artistsDetail::class, inversedBy="aboutArtwork")
     */
    private $dimension;

    /**
     * @ORM\ManyToOne(targetEntity=artistsDetail::class, inversedBy="aboutArtwork")
     */
    private $dateOfWork;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?artistsDetail
    {
        return $this->title;
    }

    public function setTitle(?artistsDetail $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getMaterial(): ?string
    {
        return $this->material;
    }

    public function setMaterial(string $material): self
    {
        $this->material = $material;

        return $this;
    }

    public function getMatiere(): ?artistsDetail
    {
        return $this->matiere;
    }

    public function setMatiere(?artistsDetail $matiere): self
    {
        $this->matiere = $matiere;

        return $this;
    }

    public function getDimension(): ?artistsDetail
    {
        return $this->dimension;
    }

    public function setDimension(?artistsDetail $dimension): self
    {
        $this->dimension = $dimension;

        return $this;
    }

    public function getDateOfWork(): ?artistsDetail
    {
        return $this->dateOfWork;
    }

    public function setDateOfWork(?artistsDetail $dateOfWork): self
    {
        $this->dateOfWork = $dateOfWork;

        return $this;
    }
}
