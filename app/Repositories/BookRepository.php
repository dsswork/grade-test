<?php

namespace App\Repositories;

use App\Data\BookData;
use App\Entities\Book;
use Doctrine\Persistence\ObjectRepository;
use LaravelDoctrine\ORM\Facades\EntityManager;

class BookRepository extends Repository
{
    public function __construct(ObjectRepository $repository, public AuthorRepository $authorRepository)
    {
        parent::__construct($repository);
    }

    public function all(): array
    {
        $books = $this->repository->findAll();
        return $books;
    }

    public function create(BookData $bookData, array $authorsIds): array
    {
        $book = new Book($bookData->title, $bookData->price, $bookData->publishYear, $bookData->publisherId);

        foreach ($authorsIds as $id) {
            $author = $this->authorRepository->findById($id);
            $book->addAuthor($author);
        }

        EntityManager::persist($book);
        EntityManager::flush();
        return $book->toArray();
    }

}
