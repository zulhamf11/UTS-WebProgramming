@extends('layouts.main')
@section('container')
    <div class="row bg-secondary bg-dark text-white">
        <div class="col">
            <h4>Book List</h4>
        </div>
    </div>
    {{-- card --}}
    <div class="container mt-4">
        <div class="row">
            @foreach ($data as $book)
                <div class="col-md-3 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $book->image }}" class="card-img-top" alt="bookcover1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">by</p>
                            <p class="author">{{ $book->author }}</p>
                            <a href="{{ route('book_Detail', $book->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
@endsection()
