@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="display-5 fw-bold text-center">Properties</h1>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $property->photo) }}" class="card-img-top" alt="Property Photo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $property->title }}</h5>
                            <p class="card-text">{{ $property->description }}</p>
                            <p class="card-text"><strong>Bedrooms:</strong> {{ $property->bedrooms }}</p>
                            <p class="card-text"><strong>Bathrooms:</strong> {{ $property->bathrooms }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ $property->price }}</p>
                            <p class="card-text"><strong>Type:</strong> {{ $property->type }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $property->location }}</p>
                            <a href="{{ url('/properties/' . $property->id) }}" class="btn btn-info">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection