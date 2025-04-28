@extends('Admin_layouts.layout')

@section('content')

<div class="container-xxl">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Costume Category Management</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('costumecategories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="category-name" class="form-label">Category Name</label>
                                    <input type="text" id="category-name" name="name" class="form-control" placeholder="Enter Category Name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" id="slug" name="slug" class="form-control" placeholder="enter-category-slug" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="category-image" class="form-label">Category Image</label>
                                    <input type="file" id="category-image" name="image" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer border-top">
                            <button type="submit" class="btn btn-primary">Create Costume Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
