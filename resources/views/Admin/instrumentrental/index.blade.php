@extends('Admin_layouts.layout')

@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Instrument Rentals</h4>
                    <a href="{{ route('instrumentrentals.create') }}" class="btn btn-primary">Add New Instrument</a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success mt-2">{{ session('success') }}</div>
                @endif

                <div class="p-3">
                    <div class="d-flex justify-content-between">
                        <form class="d-flex mb-3" method="GET" action="{{ route('instrumentrentals.index') }}">
                            <input type="text" class="form-control me-2" name="search" placeholder="Search Instruments..." value="{{ request('search') }}">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead class="bg-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price Per Day</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($instruments as $instrument)
                                    <tr>
                                        <td>{{ $instrument->id }}</td>
                                        <td>{{ $instrument->name }}</td>
                                        <td>{{ $instrument->description }}</td>
                                        <td>{{ $instrument->price_per_day }}</td>
                                        <td>@if($instrument->instrumentRentalCategory)
                                            {{ $instrument->instrumentRentalCategory->name }}
                                        @else
                                            No Category
                                        @endif</td>
                                        <td>
                                            @if($instrument->image)
                                                <img src="{{ asset('storage/' . $instrument->image) }}" alt="Instrument Image" width="60">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $instrument->created_at->format('d M Y') }}</td>
                                        <td>
                                            <a href="{{ route('instrumentrentals.edit', $instrument->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('instrumentrentals.destroy', $instrument->id) }}" method="POST" style="display:inline;">
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
                        {{ $instruments->links() }}
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
                if (!confirm("Are you sure you want to delete this instrument?")) {
                    e.preventDefault();
                }
            });
        });
    });
</script>

@endsection
