@extends('layouts.main')
@section('container')
    <div class="row bg-secondary bg-dark text-white">
        <div class="col">
            <h4>Category</h4>
        </div>
    </div>
    {{-- card --}}
    <div class="container mt-4">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-3 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $book->books->image }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->books->title }}</h5>
                            <p class="card-text">by</p>
                            <p class="author">{{ $book->books->author }}</p>
                            <a href="{{ route('book_Detail', $book->books->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection()
