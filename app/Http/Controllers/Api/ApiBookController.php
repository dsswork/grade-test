<?php

namespace App\Http\Controllers\Api;

use App\Data\BookData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Book\AuthorsArrayRequest;
use App\Http\Requests\Web\Book\StoreRequest;
use App\Repositories\BookRepository;
use App\Services\Api\ApiAnswerService;
use App\Services\BookService;

class ApiBookController extends Controller
{
    public function __construct(
        protected BookRepository $bookRepository,
        protected BookService $bookService
    )
    {
    }

    public function index()
    {
        $books = $this->bookService->all();
        return ApiAnswerService::successfulAnswerWithData($books);
    }

    public function store(StoreRequest $request, AuthorsArrayRequest $arrayRequest)
    {
        $book = $this->bookRepository
            ->create(BookData::make(...$request->validated()), $arrayRequest->validated()['authors'] ?? []);
        return ApiAnswerService::successfulAnswerWithData($book);
    }
}
