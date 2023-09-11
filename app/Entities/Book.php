<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="books")
 */
class Book
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected int $id;

    /**
     * @ORM\Column(type="string")
     */
    protected string $title;

    /**
     * @ORM\Column(type="float")
     */
    protected float $price;

    /**
     * @ORM\Column(type="integer")
     */
    protected $publish_year;

    /**
     * @ORM\Column(type="integer")
     */
    protected $publisher_id;

    /**
     * @ORM\ManyToMany(targetEntity="Author", fetch="EAGER")
     * @ORM\JoinTable(name="author_book",
     *      joinColumns={@ORM\JoinColumn(name="book_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="author_id", referencedColumnName="id")}
     *      )
     * @var Collection<int, Author>
     */
    private Collection $authors;

    #[ORM\ManyToOne(targetEntity: Publisher::class, fetch: 'EAGER')]
    #[ORM\JoinColumn(name: 'publisher_id', referencedColumnName: 'id')]
    private Publisher $publisher;

    public function addAuthor(Author|int $author): void
    {
        if (!$this->authors->contains($author)) {
            $this->authors[] = $author;
        }
    }

    public function getAuthors(): array
    {
        $authors = $this->authors;
        $array = [];
        foreach ($authors as $author) {
            $array[] = $author->toArray();
        }

        return $array;
    }

    /**
     * @param $title
     * @param $price
     * @param $publish_year
     * @param $publisherId
     */
    public function __construct($title, $price, $publish_year, $publisher_id)
    {
        $this->title = $title;
        $this->price = $price;
        $this->publish_year = $publish_year;
        $this->publisher_id = $publisher_id;
        $this->authors = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getPriceWithCurrency(): string
    {
        return $this->price . "$";
    }

    public function getPublisher(): Publisher
    {
        return $this->publisher;
    }

    public function setPublisher(Publisher $publisher): void
    {
        $this->publisher = $publisher;
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'price' => $this->getPrice(),
            'priceWithCurrency' => $this->getPriceWithCurrency(),
            'publisher' => $this->publisher_id,
            'authors' => $this->getAuthors()
        ];
    }
}
