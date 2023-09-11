<?php

namespace App\Providers;

use App\Entities\Author;
use App\Entities\Book;
use App\Entities\Publisher;
use App\Repositories\AuthorRepository;
use App\Repositories\BookRepository;
use App\Repositories\PublisherRepository;
use Doctrine\Persistence\ObjectRepository;
use Illuminate\Support\ServiceProvider;
use LaravelDoctrine\ORM\Facades\EntityManager;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->when(BookRepository::class)
            ->needs(ObjectRepository::class)
            ->give(function () {
                return EntityManager::getRepository(Book::class);
            });

        app()->when(AuthorRepository::class)
            ->needs(ObjectRepository::class)
            ->give(function () {
                return EntityManager::getRepository(Author::class);
            });

        app()->when(PublisherRepository::class)
            ->needs(ObjectRepository::class)
            ->give(function () {
                return EntityManager::getRepository(Publisher::class);
            });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
