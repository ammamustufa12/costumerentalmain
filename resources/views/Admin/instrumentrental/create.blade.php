@extends('Admin_layouts.layout')

@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Create New Instrument Rental</h4>
                    <a href="{{ route('instrumentrentals.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('instrumentrentals.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Instrument Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <!-- Description Field -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>

                        <!-- Category Field -->
                        <div class="mb-3">
                            <label for="instrumentrentalcategory_id" class="form-label">Category</label>
                            <select name="instrumentrentalcategory_id" id="instrumentrentalcategory_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Price Per Day Field -->
                        <div class="mb-3">
                            <label for="price_per_day" class="form-label">Price Per Day</label>
                            <input type="number" name="price_per_day" id="price_per_day" class="form-control" required>
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
