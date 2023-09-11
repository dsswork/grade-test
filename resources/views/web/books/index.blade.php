<x-site.layout title="Books">
    <x-site.header/>
<div class="container">
    <div class="row text-center">
        @foreach($books as $book)
            <div class="col-md-3 my-1">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $book['title'] }}</h5>
                        <h6 class="card-subtitle mb-2">{{ $book['priceWithCurrency'] }}</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <h6>Authors:</h6>
                        @foreach($book['authors'] as $author)
                            <p><b>{{ $author['fullName'] }}</b></p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-site.layout>

