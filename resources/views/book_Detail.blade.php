@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row bg-secondary bg-dark text-white">
            <div class="col">
                <h4>Book Detail</h4>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="card mb-3">

                    <img src="{{ $book->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Title: {{ $book->title }} </p>
                        <p class="card-text">Author: {{ $book->author }}</p>
                        <p class="card-text">Category:
                            @foreach ($book->bookCategories as $item)
                                {{ $item->categories->name }}
                            @endforeach
                        </p>
                        <p class="card-text">Year: {{ $book->year }}</p>
                        <p class="card-text">Synopsis: {{ $book->synopsis }}</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
