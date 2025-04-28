@extends('Admin_layouts.layout')

@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Instrument Categories</h4>
                    <a href="{{ route('instrumentrentalcategories.create') }}" class="btn btn-primary">Add New Category</a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success mt-2">{{ session('success') }}</div>
                @endif

                <div class="p-3">
                    <div class="d-flex justify-content-between">
                        <form class="d-flex mb-3" method="GET" action="{{ route('instrumentrentalcategories.index') }}">
                            <input type="text" class="form-control me-2" name="search" placeholder="Search Categories..." value="{{ request('search') }}">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead class="bg-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>
                                            @if($category->image)
                                            <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" width="60">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $category->created_at->format('d M Y') }}</td>
                                        <td>
                                            <a href="{{ route('instrumentrentalcategories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('instrumentrentalcategories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('instrumentrentalcategories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete-confirm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-3">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Delete Confirmation -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const deleteButtons = document.querySelectorAll(".delete-confirm");
        deleteButtons.forEach(button => {
            button.addEventListener("click", function (e) {
                if (!confirm("Are you sure you want to delete this category?")) {
                    e.preventDefault();
                }
            });
        });
    });
</script>
@endsection
