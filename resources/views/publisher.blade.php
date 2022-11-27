@extends('layouts.main')
@section('container')
    <div class="row bg-secondary bg-dark text-white">
        <div class="col">
            <h4>Publisher</h4>
        </div>
    </div>
    {{-- card --}}
    <div class="container mt-4">
        <div class="row">
            @foreach ($publishers as $publisher)
                <div class="col-md-3 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $publisher->image }}" class="card-img-top" alt="bookcover1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $publisher->name }}</h5>
                            <p class="card-text">{{ $publisher->address }}</p>
                            <p class="card-text">{{ $publisher->phone }}</p>
                            <p class="card-text">{{ $publisher->email }}</p>
                            <a href="{{ route('publisher_detail', $publisher->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
@endsection()
