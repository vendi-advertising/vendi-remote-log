<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WebPropertyRepository")
 */
class WebProperty
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SiteKey;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateTimeCreated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getSiteKey(): ?string
    {
        return $this->SiteKey;
    }

    public function setSiteKey(string $SiteKey): self
    {
        $this->SiteKey = $SiteKey;

        return $this;
    }

    public function getDateTimeCreated(): ?\DateTimeInterface
    {
        return $this->DateTimeCreated;
    }

    public function setDateTimeCreated(\DateTimeInterface $DateTimeCreated): self
    {
        $this->DateTimeCreated = $DateTimeCreated;

        return $this;
    }
}
