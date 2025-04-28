@extends('Admin_layouts.layout')

@section('content')
<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">👤 User Details</h5>
                    <a href="{{ route('UserManagement.index') }}" class="btn btn-light btn-sm">⬅️ Back to List</a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <strong>Name:</strong>
                        <p class="text-muted">{{ $user->name }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Email:</strong>
                        <p class="text-muted">{{ $user->email }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Role:</strong>
                        <p class="text-muted">{{ $user->role->name ?? 'No Role Assigned' }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Created At:</strong>
                        <p class="text-muted">{{ $user->created_at->format('d M Y, h:i A') }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Last Updated:</strong>
                        <p class="text-muted">{{ $user->updated_at->format('d M Y, h:i A') }}</p>
                    </div>
                </div>

                <div class="card-footer bg-light text-end">
                    <a href="{{ route('UserManagement.edit', $user->id) }}" class="btn btn-warning">✏️ Edit User</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
