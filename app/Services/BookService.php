<?php

namespace App\Services;

use App\Repositories\BookRepository;

class BookService
{
    public function __construct(protected BookRepository $repository)
    {
    }

    public function all()
    {
        $books = $this->repository->all();
        foreach ($books as &$book) {
            $book = $book->toArray();
        }
        return $books;
    }
}
