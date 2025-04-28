@extends('Admin_layouts.layout')

@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">✏️ Edit User</h5>
                </div>

                <form action="{{ route('UserManagement.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="row">
                            <!-- Name -->
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
                            </div>

                            <!-- Role -->
                            <div class="col-md-6 mb-3">
                                <label for="role_id" class="form-label">User Role</label>
                                <select name="role_id" id="role_id" class="form-control" required>
                                    <option value="" disabled>Select Role</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Password -->
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password <small class="text-muted">(Leave blank to keep current)</small></label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="••••••••">
                            </div>

                            <!-- Confirm Password -->
                            <div class="col-md-6 mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="••••••••">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-light text-end">
                        <a href="{{ route('UserManagement.index') }}" class="btn btn-secondary">⬅️ Back</a>
                        <button type="submit" class="btn btn-success">💾 Update User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
