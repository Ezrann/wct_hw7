@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Heading and Subtitle -->
        <div class="text-center mb-5">
            <h2 class="h2 text-uppercase fw-bold position-relative d-inline-block">
                Features
                <span class="position-absolute start-50 translate-middle-x" style="bottom: -10px; width: 50px; height: 4px; background-color: #28a745;"></span>
            </h2>
            <p class="text-muted lead mt-3">
                Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            @forelse($features as $feature)
                <div class="col">
                    <div class="card h-100 border-0 text-center p-3 bg-light">
                        <div class="card-body d-flex flex-column align-items-center">
                            @if($feature->image)
                                <img src="{{ asset('storage/' . $feature->image) }}" alt="{{ $feature->title }}" class="mb-3 rounded-circle" style="width: 50px; height: 50px; object-fit: cover; border: 2px solid #ddd;">
                            @else
                                <div class="mb-3 text-muted">No image</div>
                            @endif
                            <h5 class="card-title fw-semibold text-dark">{{ $feature->title }}</h5>
                            <div class="mt-3">
                                <a href="{{ route('features.edit', $feature) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('features.destroy', $feature) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this feature?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted lead">No features found.</p>
                </div>
            @endforelse
        </div>

        <!-- Add New Feature Button -->
        <div class="text-center mt-5">
            <a href="{{ route('features.create') }}" class="btn btn-primary btn-lg">Add New Feature</a>
        </div>
    </div>
@endsection