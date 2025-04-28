@extends('Admin_layouts.layout')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">🎭 Costumes List</h4>
            <a href="{{ route('CostumeManagement.create') }}" class="btn btn-light btn-sm">+ Add New Costume</a>
        </div>

        <div class="card-body">
            @if ($costumes->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($costumes as $costume)
                                <tr>
                                    <td>
                                        @php
                                            $images = is_array($costume->images) ? $costume->images : json_decode($costume->images, true);
                                            $firstImage = $images[0] ?? null;
                                        @endphp
                                    
                                        @if ($firstImage)
                                            <img src="{{ asset('storage/' . $firstImage) }}" alt="{{ $costume->name }}" class="img-thumbnail" style="width: 60px; height: 60px; object-fit: cover;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $costume->name }}</td>
                                    <td>{{ $costume->category->name ?? 'N/A' }}</td>
                                    <td>{{ $costume->brand ?? '-' }}</td>
                                    <td>{{ $costume->stock }}</td>
                                    <td><strong>AED {{ number_format($costume->price, 2) }}</strong></td>
                                    <td>
                                        <a href="{{ route('CostumeManagement.edit', $costume->id) }}" class="btn btn-sm btn-warning me-1">
                                            ✏️ Edit
                                        </a>
                                        <a href="{{ route('CostumeManagement.show', $costume->id) }}" class="btn btn-sm btn-info me-1">
                                            👁️ View
                                        </a>
                                        <form action="{{ route('CostumeManagement.destroy', $costume->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this costume?')">
                                                🗑️ Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    {{ $costumes->links() }}
                </div>
            @else
                <p class="text-center text-muted">No costumes found.</p>
            @endif
        </div>
    </div>
</div>

@endsection
