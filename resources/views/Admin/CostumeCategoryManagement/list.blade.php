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
                    @if($categories->count())
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered align-middle text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $index => $category)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                @if($category->image)
                                                    <img src="{{ asset('storage/' . $category->image) }}" alt="Image" class="rounded" width="60" height="60" style="object-fit: cover;">
                                                @else
                                                    <span class="text-muted">No image</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('costumecategories.show', $category->id) }}" class="btn btn-sm btn-info me-1">👁 View</a>
                                                <a href="{{ route('costumecategories.edit', $category->id) }}" class="btn btn-sm btn-warning me-1">✏️ Edit</a>
                                                <form action="{{ route('costumecategories.destroy', $category->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this category?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">🗑 Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info text-center">No costume categories found.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
