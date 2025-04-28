@extends('Admin_layouts.layout')

@section('content')

<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">👤 Create New User</h5>
                    <a href="{{ route('UserManagement.index') }}" class="btn btn-sm btn-light">⬅ Back</a>
                </div>

                <form action="{{ route('UserManagement.store') }}" method="POST" class="p-3">
                    @csrf
                    <div class="row g-4">

                        <!-- Name -->
                        <div class="col-md-6">
                            <label class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control form-control-lg" placeholder="John Doe" required>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="john@example.com" required>
                        </div>

                        <!-- Password -->
                        <div class="col-md-6">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="••••••••" required>
                        </div>

                        <!-- Confirm Password -->
                        <div class="col-md-6">
                            <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="••••••••" required>
                        </div>

                        <!-- Role Selection -->
                        <div class="col-md-6">
                            <label class="form-label">Assign Role <span class="text-danger">*</span></label>
                            <select name="role_id" class="form-select form-select-lg" required>
                                <option value="" disabled selected>Select a Role</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <!-- Submit Button -->
                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-primary btn-lg px-5">
                            💾 Create User
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
