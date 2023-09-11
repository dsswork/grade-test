<x-site.layout title="Add Book">
    <x-site.header />

    <div class="px-4 py-5 text-center">
        <h1 class="display-5 fw-bold">Add Book</h1>
        <form action="{{ route('web.books.store') }}" method="post"
              class="col-lg-3 mx-auto">
            @csrf
            @if(session('success'))
                <p class="text-success"><b>{{ session('success') }}</b></p>
                @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price">Price, $</label>
                <input type="number" name="price" step="0.01" id="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="publishYear">Publish Year</label>
                <input type="number" step="1" name="publishYear"
                       value="1990" min="1990" max="2023"
                       id="publishYear" class="form-control" required>
            </div>
            <x-author-list />
            <x-publisher-list />
            <button class="btn btn-primary my-4">Add</button>
        </form>
    </div>
</x-site.layout>
