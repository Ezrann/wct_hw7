@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <div class="card-header p-4" style="background: linear-gradient(135deg, #2980b9, #8e44ad); color: #ffffff;">
                    <h3 class="mb-0 text-center" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.2);">
                        <i class="fas fa-star me-2" style="color: #ffd700;"></i>
                        <span style="font-weight: 700; letter-spacing: 0.5px;">Add New Feature</span>
                    </h3>
                </div>

                <div class="card-body p-4">
                    <form action="{{ isset($feature) ? route('features.update', $feature) : route('features.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="needs-validation"
                        id="featureForm"
                        novalidate>
                        @csrf
                        @if(isset($feature))
                        @method('PUT')
                        @endif

                        <!-- Basic Details Section -->
                        <div class="mb-4 pb-3 border-bottom">
                            <h5 class="card-title mb-4">
                                <i class="fas fa-info-circle me-2 text-primary"></i>Basic Details
                            </h5>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text"
                                            name="title"
                                            id="title"
                                            class="form-control form-control-lg @error('title') is-invalid @enderror"
                                            placeholder="Enter feature title"
                                            value="{{ old('title', $feature->title ?? '') }}"
                                            required>
                                        <label for="title">Feature Title</label>
                                        @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-text text-muted">
                                        Choose a concise, descriptive title for this feature
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Media Section -->
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="image" class="form-label fw-bold mb-3">Feature Image</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-light">
                                                <i class="fas fa-upload"></i>
                                            </span>
                                            <input type="file"
                                                name="image"
                                                id="image"
                                                class="form-control @error('image') is-invalid @enderror"
                                                onchange="previewImage(this)">
                                            @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="text-center">
                                        <p class="fw-bold mb-3">Image Preview</p>
                                        <div class="image-preview-container border rounded-3 d-flex align-items-center justify-content-center bg-light"
                                            style="height: 200px; overflow: hidden;">
                                            @if(isset($feature) && $feature->image)
                                            <img id="imagePreview" src="{{ asset('storage/' . $feature->image) }}"
                                                alt="Feature Preview" class="img-fluid rounded-3 preview-image">
                                            @else
                                            <img id="imagePreview" src="/api/placeholder/400/320"
                                                alt="No image selected" class="img-fluid preview-image d-none">
                                            <span id="noImageText" class="text-muted">
                                                <i class="fas fa-image fa-3x mb-3"></i><br>
                                                Image preview will appear here
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-flex justify-content-end mt-5">
                            <button type="submit" class="btn btn-success btn-lg px-5">
                                <i class="fas fa-save me-2"></i>
                                Create Feature
                            </button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- Script for Image Preview -->
<script>
    function previewImage(input) {
        const preview = document.getElementById('imagePreview');
        const noImageText = document.getElementById('noImageText');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.setAttribute('src', e.target.result);
                preview.classList.remove('d-none');
                if (noImageText) noImageText.classList.add('d-none');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    // Form validation
    (function() {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endsection