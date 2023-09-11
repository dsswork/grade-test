<?php

namespace App\Repositories;

use App\Data\AuthorData;
use App\Entities\Author;
use LaravelDoctrine\ORM\Facades\EntityManager;

class AuthorRepository extends Repository
{
    public function all(): array
    {
        return $this->repository->findAll();
    }

    public function findById(int $id)
    {
        return $this->repository->find($id);
    }

    public function create(AuthorData $authorData): Author
    {
        $author = new Author($authorData->firstName, $authorData->lastName);
        EntityManager::persist($author);
        EntityManager::flush();
        return $author;
    }
}
