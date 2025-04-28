@extends('Admin_layouts.layout')

@section('content')
<div class="container-xxl">
    <div class="row justify-content-center mt-4">
        <div class="col-xl-8">
            <div class="card shadow rounded-4 border-0">
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h4 class="card-title mb-0">🎵 Add New Dance Class</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('danceclasses.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                    
                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold">Class Name</label>
                            <input type="text" name="name" class="form-control form-control-lg" required placeholder="Enter class name">
                        </div>
                    
                        <div class="mb-4">
                            <label for="dance_category_id" class="form-label fw-semibold">Dance Category</label>
                            <select name="dance_category_id" class="form-select form-select-lg" required>
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        <div class="mb-4">
                            <label for="user_id" class="form-label fw-semibold">Instructor (User)</label>
                            <select name="user_id" class="form-select form-select-lg" required>
                                <option value="">-- Select Instructor --</option>
                                @foreach($users as $instructor)
                                    <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        <div class="mb-4">
                            <label for="instructor" class="form-label fw-semibold">Instructor Name</label>
                            <input type="text" name="instructor" class="form-control form-control-lg" required placeholder="Enter instructor name">
                        </div>
                    
                        <div class="mb-4">
                            <div class="mb-4">
                                <label class="font-semibold">Select Any 2 Days:</label>
                                <div class="grid grid-cols-2 gap-2 mt-2">
                                    @php
                                        $weekDays = ['Monday', 'Tuesday', 'Wednesday', 'Friday'];
                                    @endphp
                            
                                    @foreach ($weekDays as $day)
                                        <label class="flex items-center space-x-2">
                                            <input 
                                                type="checkbox" 
                                                name="selected_days[]" 
                                                value="{{ $day }}" 
                                                class="day-checkbox"
                                            >
                                            <span>{{ $day }}</span>
                                        </label>
                                    @endforeach
                                </div>
                                <small class="text-gray-500">You can select only 2 days</small>
                            </div>
                            
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const checkboxes = document.querySelectorAll('.day-checkbox');
                        
                                checkboxes.forEach(function (checkbox) {
                                    checkbox.addEventListener('change', function () {
                                        const checked = document.querySelectorAll('.day-checkbox:checked');
                        
                                        if (checked.length > 2) {
                                            this.checked = false;
                                            alert("You can only select 2 days.");
                                        }
                                    });
                                });
                            });
                        </script>
                        
                        <div class="mb-4">
                            <label for="price" class="form-label fw-semibold">Price (AED)</label>
                            <input type="number" name="price" class="form-control form-control-lg" required step="0.01" placeholder="e.g. 100">
                        </div>

                        <div class="mb-4">
                            <label for="descripton" class="form-label"> Image </label>
                            <input type="file" name="images[]" id="main-image" class="form-control" multiple required>

                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success btn-lg px-4">💾 Create Class</button>
                            <a href="{{ route('danceclasses.index') }}" class="btn btn-secondary btn-lg px-4">Cancel</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
