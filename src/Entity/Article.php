<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 * @OA\Schema(
 *
 * )
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @OA\Property(
     *     type="integer",
     *     description="id of the article",
     *     example="1"
     * )
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @OA\Property(
     *     type="string",
     *     description="the title of the article",
     *     nullable=true
     * )
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @OA\Property(
     *     type="string",
     *     description="the title of the article",
     *     nullable=true
     * )
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Author", inversedBy="articles")
     */
    private $author;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @OA\Property(
     *     type="string",
     *     description="the title of the article",
     *     nullable=true,
     *     format="date-time"
     * )
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    public function setAuthor(?Author $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
