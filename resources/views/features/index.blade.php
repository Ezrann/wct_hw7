@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Heading and Subtitle -->
        <div class="text-center mb-5">
            <h2 class="h2 text-uppercase fw-bold position-relative d-inline-block text-white">
                Features
                <span class="position-absolute start-50 translate-middle-x" style="bottom: -10px; width: 60px; height: 4px; background-color: rgba(255, 255, 255, 0.6);"></span>
            </h2>
            <p class="text-light lead mt-3">
                Discover our latest features crafted with care and creativity.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            @forelse($features as $feature)
                <div class="col">
                    <div class="glass-card h-100 text-center p-4">
                        <div class="card-body d-flex flex-column align-items-center">
                            @if($feature->image)
                                <img src="{{ asset('storage/' . $feature->image) }}" alt="{{ $feature->title }}" class="mb-3 rounded-circle shadow" style="width: 60px; height: 60px; object-fit: cover;">
                            @else
                                <div class="mb-3 text-muted">
                                    <i class="bi bi-image fs-2"></i>
                                </div>
                            @endif
                            <h5 class="card-title fw-semibold text-white">{{ $feature->title }}</h5>
                            <div class="mt-3 d-flex gap-2">
                                <a href="{{ route('features.edit', $feature) }}" class="btn btn-sm btn-outline-light">Edit</a>
                                <form action="{{ route('features.destroy', $feature) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this feature?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
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
            <a href="{{ route('features.create') }}" class="btn btn-success btn-lg px-5 py-2">+ Add Feature</a>
        </div>
    </div>

    <style>
        body {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            color: #fff;
        }
        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }
    </style>
@endsection
