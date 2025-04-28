@extends('Admin_layouts.layout')

@section('content')
<div class="container-xxl">
    <!-- Header Card -->
    <div class="card border-0 shadow mb-4 bg-white">
        <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
            <h4 class="text-dark fw-bold mb-0">
                <i class="bi bi-calendar-check me-2 text-primary"></i> Rentals Overview
            </h4>
            <a href="{{ route('rentals.create') }}" class="btn btn-success rounded-pill px-4">
                <i class="bi bi-plus-circle me-2"></i> Add Rental
            </a>
        </div>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4 shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Rentals Table -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle text-center mb-0">
                    <thead class="bg-light text-dark">
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Costume</th>
                            <th>Rental Date</th>
                            <th>Return Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($rentals as $index => $rental)
                        <tr class="align-middle">
                            <td>{{ $index + 1 }}</td>
                            <td class="text-start">
                                <div class="d-flex align-items-center">
                                    <div class="avatar bg-primary text-white rounded-circle me-2" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                        {{ strtoupper(substr($rental->user->name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <div class="fw-bold">{{ $rental->user->name }}</div>
                                        <small class="text-muted">{{ $rental->user->email }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $rental->costume->name }}</td>
                            <td>{{ \Carbon\Carbon::parse($rental->rental_date)->format('d M, Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($rental->return_date)->format('d M, Y') }}</td>
                            <td>
                                <span class="badge rounded-pill 
                                    @if($rental->status == 'pending') bg-warning text-dark
                                    @elseif($rental->status == 'confirmed') bg-primary
                                    @elseif($rental->status == 'cancelled') bg-danger
                                    @else bg-success
                                    @endif">
                                    {{ ucfirst($rental->status) }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('rentals.show', $rental->id) }}" class="btn btn-sm btn-outline-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('rentals.edit', $rental->id) }}" class="btn btn-sm btn-outline-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" onsubmit="return confirm('Delete this rental?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-muted py-4">No rentals available yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="p-3 border-top text-center">
                {{ $rentals->links() }}
            </div>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

@endsection
