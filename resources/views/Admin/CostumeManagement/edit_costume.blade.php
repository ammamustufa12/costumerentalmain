@extends('Admin_layouts.layout')
@section('content')
    <!-- Start Container Fluid -->
    <div class="container-xxl">

        <div class="row">
            <div class="col-xl-12 col-lg-8">
               <div class="card">
                   <div class="card-header">
                       <h4 class="card-title">Add Costume Photo</h4>
                   </div>
                   <div class="card-body">
                       <!-- File Upload -->
                       <form action="{{ route('CostumeManagement.update', $costume->id) }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white shadow rounded">
                        @csrf
                        @method('PUT')
                    
                        <!-- Main Image Upload -->
                        <div class="mb-4">
                            <label for="main-image" class="form-label fw-bold">Main Image</label>
                            <input type="file" name="images[]" id="main-image" class="form-control" multiple>
                            @if ($costume->images)
                                <div class="mt-2">
                                    @foreach ($costume->images as $img)
                                        <img src="{{ asset('storage/' . $img) }}" class="img-thumbnail me-2" style="max-width: 100px;" />
                                    @endforeach
                                </div>
                            @endif
                            @error('image') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    
                        <!-- Costume Info Section -->
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white fw-semibold">Costume Information</div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Costume Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name', $costume->name) }}" required>
                                    </div>
                    
                                    <div class="col-md-6">
                                        <label class="form-label">Category</label>
                                        <select name="category" class="form-select" required>
                                            <option value="">Choose a category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $costume->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                    
                                    <div class="col-md-4">
                                        <label class="form-label">Brand</label>
                                        <input type="text" name="brand" class="form-control" value="{{ old('brand', $costume->brand) }}">
                                    </div>
                    
                                    <div class="col-md-4">
                                        <label class="form-label">Weight</label>
                                        <div class="input-group">
                                            <input type="number" name="weight" class="form-control" value="{{ old('weight', $costume->weight) }}" required>
                                            <select name="unit" class="form-select">
                                                <option value="gm" {{ $costume->unit == 'gm' ? 'selected' : '' }}>gm</option>
                                                <option value="kg" {{ $costume->unit == 'kg' ? 'selected' : '' }}>kg</option>
                                            </select>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-4">
                                        <label class="form-label">Gender</label>
                                        <select name="gender" class="form-select" required>
                                            <option value="">Select Gender</option>
                                            <option value="Men" {{ $costume->gender == 'Men' ? 'selected' : '' }}>Men</option>
                                            <option value="Women" {{ $costume->gender == 'Women' ? 'selected' : '' }}>Women</option>
                                            <option value="Other" {{ $costume->gender == 'Other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                    </div>
                                </div>
                    
                                <!-- Sizes -->
                                <div class="mt-4">
                                    <label class="form-label">Sizes</label><br>
                                    @foreach (['XS', 'S', 'M', 'L', 'XL', 'XXL', '3XL'] as $size)
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="sizes[]" value="{{ $size }}" class="form-check-input"
                                                {{ in_array($size, $costume->sizes ?? []) ? 'checked' : '' }}>
                                            <label class="form-check-label">{{ $size }}</label>
                                        </div>
                                    @endforeach
                                </div>
                    
                                <!-- Colors -->
                                <div class="mt-3">
                                    <label class="form-label">Colors</label><br>
                                    @foreach (['dark' => 'Dark', 'yellow' => 'Yellow', 'white' => 'White', 'red' => 'Red', 'green' => 'Green'] as $color => $label)
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="colors[]" value="{{ $color }}" class="form-check-input"
                                                {{ in_array($color, $costume->colors ?? []) ? 'checked' : '' }}>
                                            <label class="form-check-label">{{ $label }}</label>
                                        </div>
                                    @endforeach
                                </div>
                    
                                <!-- Description -->
                                <div class="mt-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="4">{{ old('description', $costume->description) }}</textarea>
                                </div>
                    
                                <!-- Tag Number -->
                                <div class="mt-3">
                                    <label class="form-label">Tag Number</label>
                                    <input type="text" name="tag_number" class="form-control" value="{{ old('tag_number', $costume->tag_number) }}">
                                </div>
                    
                                <!-- Stock -->
                                <div class="mt-3">
                                    <label class="form-label">Stock</label>
                                    <input type="number" name="stock" class="form-control" value="{{ old('stock', $costume->stock) }}" required>
                                </div>
                    
                                <!-- Tags -->
                                <div class="mt-3">
                                    <label class="form-label">Tags</label>
                                    <select class="form-select select2" name="tags[]" multiple>
                                        @foreach (['Fashion', 'Electronics', 'Watches', 'Headphones'] as $tag)
                                            <option value="{{ $tag }}" {{ in_array($tag, $costume->tags ?? []) ? 'selected' : '' }}>{{ $tag }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Pricing Section -->
                        <div class="card mb-4">
                            <div class="card-header bg-info text-white fw-semibold">Pricing Details</div>
                            <div class="card-body row g-3">
                                <div class="col-md-3">
                                    <label class="form-label">Price</label>
                                    <input type="number" name="price" id="product-price" class="form-control" value="{{ old('price', $costume->price) }}" required>
                                </div>
                    
                                <div class="col-md-3">
                                    <label class="form-label">Discount (%)</label>
                                    <input type="number" name="discount" id="product-discount" class="form-control" step="0.01" value="{{ old('discount', $costume->discount) }}">
                                </div>
                    
                                <div class="col-md-3">
                                    <label class="form-label">Tax (5%)</label>
                                    <input type="number" name="tax" id="product-tax" class="form-control" step="0.01" readonly value="{{ old('tax', $costume->tax) }}">
                                </div>
                    
                                <div class="col-md-3">
                                    <label class="form-label">Total Price</label>
                                    <input type="number" id="total-price" class="form-control" readonly value="{{ $costume->price + $costume->tax - $costume->discount }}">
                                </div>
                            </div>
                        </div>
                    
                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">💾 Update Costume</button>
                        </div>
                    </form>
                    
                    <script>
                        // Image preview
                        document.getElementById("main-image").addEventListener("change", function () {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                const preview = document.getElementById("imagePreview");
                                preview.src = e.target.result;
                                preview.style.display = 'block';
                            };
                            reader.readAsDataURL(this.files[0]);
                        });
                    
                        // Price calculation
                        function calculateTotalPrice() {
                            const price = parseFloat(document.getElementById('product-price').value) || 0;
                            const discount = parseFloat(document.getElementById('product-discount').value) || 0;
                            const discountedPrice = price - (price * discount / 100);
                            const tax = discountedPrice * 0.05;
                            const totalPrice = discountedPrice + tax;
                    
                            document.getElementById('product-tax').value = tax.toFixed(2);
                            document.getElementById('total-price').value = totalPrice.toFixed(2);
                        }
                    
                        document.getElementById('product-price').addEventListener('input', calculateTotalPrice);
                        document.getElementById('product-discount').addEventListener('input', calculateTotalPrice);
                    </script>
                                        
                    
           </div>
           
        </div>
    </div>

@endsection
