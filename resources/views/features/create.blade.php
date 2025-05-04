@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">{{ isset($feature) ? 'Edit Feature' : 'Add New Feature' }}</div>
                    <div class="card-body">
                        <form action="{{ isset($feature) ? route('features.update', $feature) : route('features.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($feature))
                                @method('PUT')
                            @endif

                            <!-- Title Field -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input 
                                    type="text" 
                                    name="title" 
                                    id="title" 
                                    value="{{ old('title', $feature->title ?? '') }}" 
                                    placeholder="Enter feature title"
                                    class="form-control"
                                    required
                                >
                                @error('title')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Feature Image</label>
                                <input 
                                    type="file" 
                                    name="image" 
                                    id="image"
                                    class="form-control"
                                >
                                @error('image')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror

                                @if(isset($feature) && $feature->image)
                                    <div class="mt-3">
                                        <p class="small text-muted mb-1">Current Image:</p>
                                        <img src="{{ asset('storage/' . $feature->image) }}" alt="Feature Image" class="img-thumbnail rounded-circle" style="width: 80px; height: 80px; object-fit: cover;">
                                    </div>
                                @endif
                            </div>

                            <!-- Submit Button -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ isset($feature) ? 'Update Feature' : 'Create Feature' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection