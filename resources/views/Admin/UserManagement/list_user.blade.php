@extends('Admin_layouts.layout')

@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card border-0 shadow-sm">
                <div class="d-flex card-header justify-content-between align-items-center bg-primary text-white">
                    <h5 class="mb-0">👥 User Management</h5>
                    <a href="{{ route('UserManagement.create') }}" class="btn btn-light btn-sm">➕ Add New User</a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success m-3">{{ session('success') }}</div>
                @endif

                <div class="p-3">
                    <!-- Search -->
                    <form class="row mb-4" method="GET">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="search" placeholder="🔍 Search Users...">
                        </div>
                        <div class="col-md-auto">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </div>
                    </form>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-striped align-middle table-bordered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 5%;">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th style="width: 20%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role->name ?? 'No Role' }}</td>
                                        <td>
                                            <a href="{{ route('UserManagement.show', $user->id) }}" class="btn btn-info btn-sm me-1">👁 Show</a>
                                            <a href="{{ route('UserManagement.edit', $user->id) }}" class="btn btn-warning btn-sm me-1">✏️ Edit</a>
                                            <form action="{{ route('UserManagement.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure to delete this user?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">🗑 Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">No users found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
