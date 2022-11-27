@extends('layouts.main')


@section('container')
    <div class="container">
        <div class="row bg-secondary bg-dark text-white">
            <div class="col">
                <h4>{{ $publisher->name }}</h4>
                <h4>Address : {{ $publisher->address }}</h4>
                <h4>Phone - {{ $publisher->phone }}</h4>
                <h4>Email - {{ $publisher->email }}</h4>
            </div>
        </div>
        <div class="row">
            @foreach ($publisher->books as $item)
                <div class="col-md-3 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $item->image }}" class="card-img-top" alt="bookcover1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">by</p>
                            <p class="author">{{ $item->author }}</p>
                            <a href="{{ route('book_Detail', $item->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
    </div>
@endsection
