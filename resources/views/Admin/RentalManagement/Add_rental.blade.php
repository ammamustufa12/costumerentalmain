@extends('Admin_layouts.layout')

@section('content')
<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-white fs-20 me-2"></iconify-icon>
                        Create New Rental
                    </h5>
                    <a href="{{ route('rentals.index') }}" class="btn btn-sm btn-light">Back to List</a>
                </div>

                <div class="card-body">
                    {{-- Display Validation Errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger mb-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('rentals.store') }}" method="POST">
                        @csrf

                        <div class="row g-3">
                            <!-- User Selection -->
                            <div class="col-md-6">
                                <label for="user_id" class="form-label">User</label>
                                <select name="user_id" class="form-select" required>
                                    <option value="">Select User</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Costume Selection -->
                            <div class="col-md-6">
                                <label for="costume_id" class="form-label">Costume</label>
                                <select name="costume_id" id="costumeSelect" class="form-select" required>
                                    <option value="">Select Costume</option>
                                    @foreach($costumes as $costume)
                                        <option value="{{ $costume->id }}">{{ $costume->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Rental Date -->
                            <div class="col-md-6">
                                <label for="rental_date" class="form-label">Rental Date</label>
                                <input type="date" name="rental_date" class="form-control" required>
                            </div>

                            <!-- Return Date -->
                            <div class="col-md-6">
                                <label for="return_date" class="form-label">Return Date</label>
                                <input type="date" name="return_date" class="form-control" required>
                            </div>

                            <!-- Quantity -->
                            <div class="col-md-6">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" name="quantity" class="form-control" min="1" required>
                            </div>

                            <!-- Price (Auto-Filled) -->
                            <div class="col-md-6">
                                <label for="price" class="form-label">Total Price</label>
                                <input type="number" name="price" id="priceField" class="form-control" step="0.01" min="0" required>
                            </div>

                            <!-- Status -->
                            <div class="col-md-12">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-select" required>
                                    <option value="pending">Pending</option>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="cancelled">Cancelled</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <button type="reset" class="btn btn-light me-2">Reset</button>
                            <button type="submit" class="btn btn-primary">Create Rental</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const costumeSelect = document.getElementById('costumeSelect');
        const priceField = document.getElementById('priceField');

        costumeSelect.addEventListener('change', function () {
            const costumeId = this.value;

            if (costumeId) {
                fetch(`/get-costume-price/${costumeId}`)
                    .then(response => response.json())
                    .then(data => {
                        priceField.value = data.price ?? 0;
                    })
                    .catch(error => {
                        console.error('Error fetching costume price:', error);
                        priceField.value = 0;
                    });
            } else {
                priceField.value = '';
            }
        });
    });
</script>
@endpush

@endsection
