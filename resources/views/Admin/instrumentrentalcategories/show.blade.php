@extends('Admin_layouts.layout')

@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Category Details</h4>
                    <a href="{{ route('instrumentrentalcategories.index') }}" class="btn btn-secondary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Name:</strong>
                        <p>{{ $instrumentRentalCategory->name }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Slug:</strong>
                        <p>{{ $instrumentRentalCategory->slug }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Image:</strong><br>
                        @if($instrumentRentalCategory->image)
                            <img src="{{ asset('storage/' . $instrumentRentalCategory->image) }}" alt="Category Image" class="img-fluid" style="max-width: 200px;">
                        @else
                            <p>No image uploaded.</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
