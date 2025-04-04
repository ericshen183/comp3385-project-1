@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $property->photo) }}" alt="Property Photo" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="display-5 fw-bold">{{ $property->title }}</h1>
                                <p class="card-text"><strong>Description:</strong> {{ $property->description }}</p>
                                <p class="card-text"><strong>Bedrooms:</strong> {{ $property->bedrooms }}</p>
                                <p class="card-text"><strong>Bathrooms:</strong> {{ $property->bathrooms }}</p>
                                <p class="card-text"><strong>Price:</strong> ${{ $property->price }}</p>
                                <p class="card-text"><strong>Type:</strong> {{ $property->type }}</p>
                                <p class="card-text"><strong>Location:</strong> {{ $property->location }}</p>
                                <a href="mailto:realtor@example.com?subject=Inquiry about {{ $property->title }}" class="btn btn-primary">Email Realtor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection