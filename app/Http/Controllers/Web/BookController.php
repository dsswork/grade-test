<?php

namespace App\Http\Controllers\Web;

use App\Data\BookData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Book\AuthorsArrayRequest;
use App\Http\Requests\Web\Book\StoreRequest;
use App\Repositories\BookRepository;
use App\Services\BookService;

class BookController extends Controller
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
        return view('web.books.index', compact('books'));
    }

    public function create()
    {
        return view('web.books.create');
    }

    public function store(StoreRequest $request, AuthorsArrayRequest $authorsRequest)
    {
        $book = $this->bookRepository
            ->create(BookData::make(...$request->validated()), $authorsRequest->validated()['authors'] ?? []);
        return to_route('web.books.create')->with(['success' => 'Book "' . $book['title'] . '" has been created']);
    }
}
