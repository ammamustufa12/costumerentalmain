@extends('Admin_layouts.layout')

@section('content')

<div class="container-xxl">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm border-0">
                <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                    <h4 class="mb-0">🎭 Costume Categories</h4>
                    <a href="{{ route('costumecategories.create') }}" class="btn btn-light btn-sm">➕ Add New Category</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('costumecategories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
        
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                        </div>
        
                        <div class="mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control" value="{{ $category->slug }}">
                        </div>
        
                        <div class="mb-3">
                            <label>Current Image</label><br>
                            @if($category->image)
                                <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" width="100">
                            @else
                                <span class="text-muted">No image</span>
                            @endif
                        </div>
        
                        <div class="mb-3">
                            <label>New Image (optional)</label>
                            <input type="file" name="image" class="form-control">
                        </div>
        
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('costumecategories.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>




                </div>
           
            </div>
        </div>
        <!-- End Container Fluid -->
     
    @endsection
    