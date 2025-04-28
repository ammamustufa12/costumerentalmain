@extends('Admin_layouts.layout')
@section('content')
    <!-- Start Container Fluid -->
    <div class="container-xxl">

        <div class="row">
            {{-- <div class="col-xl-3 col-lg-4">
                              <div class="row" id="productContainer">
                                   <!-- New products will be appended here -->
                               </div>
                         </div> --}}
            {{-- <div class="col-xl-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Costume Photo</h4>
                    </div>
                    <div class="card-body">
                        <!-- File Upload -->
                        <form action="{{ route('CostumeManagement.store') }}" method="post" class="dropzone"
                            id="myAwesomeDropzone" enctype="multipart/form-data">
                            @csrf
                            <!-- Main Image Upload -->
                            <div class="mb-3">
                              <label for="main-image" class="form-label">Main Image</label>
                              <input type="file" name="images[]" id="main-image" class="form-control" multiple required>
                          </div>

                            <!-- Gallery Images Upload -->
                            <div class="mb-3">
                                <label class="form-label">Gallery Images</label>
                                <div class="dropzone" id="galleryDropzone">
                                    <div class="dz-message needsclick">
                                        <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                        <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to
                                                browse</span></h3>
                                        <span class="text-muted fs-13">1600 x 1200 (4:3) recommended. PNG, JPG, and GIF
                                            files are allowed.</span>
                                    </div>
                                </div>
                            </div>

                     

                    </div>
                </div>
                <script>
                    Dropzone.autoDiscover = false;
                
                    const galleryDropzone = new Dropzone("#galleryDropzone", {
                        url: "{{ route('CostumeManagement.gallery.upload') }}", // You’ll create this route
                        paramName: "file",
                        maxFilesize: 2, // in MB
                        uploadMultiple: false,
                        acceptedFiles: ".jpeg,.jpg,.png,.gif",
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        success: function (file, response) {
                            let input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = 'gallery[]';
                            input.value = response.file_path;
                            document.getElementById('galleryInputs').appendChild(input);
                        }
                    });
                </script>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Costume Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Costume Name</label>
                                    <input type="text" id="product-name" name="name" class="form-control"
                                        placeholder="Costume Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="product-categories" class="form-label">Costume Categories</label>
                                <select class="form-control" id="product-categories" name="category" required>
                                    <option value="">Choose a category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Brand</label>
                                    <input type="text" id="product-brand" name="brand" class="form-control"
                                        placeholder="Brand Name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-weight" class="form-label">Weight</label>
                                    <div class="input-group">
                                        <input type="text" id="product-weight" name="weight" class="form-control"
                                            placeholder="Enter weight (e.g., 500g, 1kg)" aria-label="Weight input" required>
                                        <select class="form-select" id="weight-unit" name="unit"
                                            aria-label="Weight unit">
                                            <option value="gm">gm</option>
                                            <option value="kg">kg</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-control" id="gender" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="Men">Men</option>
                                    <option value="Women">Women</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-4">
                                <div class="mt-3">
                                    <h5 class="text-dark fw-medium mb-3">Size:</h5>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach (['XS', 'S', 'M', 'L', 'XL', 'XXL', '3XL'] as $size)
                                            <div>
                                                <input type="checkbox" class="btn-check" id="size-{{ $size }}"
                                                    name="sizes[]" value="{{ $size }}">
                                                <label class="btn btn-outline-secondary px-3 py-2"
                                                    for="size-{{ $size }}">{{ $size }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="mt-3">
                                    <h5 class="text-dark fw-medium mb-3">Colors:</h5>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach (['dark' => 'text-dark', 'yellow' => 'text-warning', 'white' => 'text-white', 'red' => 'text-danger', 'green' => 'text-success'] as $color => $colorClass)
                                            <div>
                                                <input type="checkbox" class="btn-check" id="color-{{ $color }}"
                                                    name="colors[]" value="{{ $color }}">
                                                <label class="btn btn-outline-secondary avatar-sm"
                                                    for="color-{{ $color }}">
                                                    <i class="bx bxs-circle fs-18 {{ $colorClass }}"></i>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="7"
                                        placeholder="Short description about the product"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-id" class="form-label">Tag Number</label>
                                    <input type="number" id="product-id" name="tag_number" class="form-control"
                                        placeholder="#******">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-stock" class="form-label">Stock</label>
                                    <input type="number" id="product-stock" name="stock" class="form-control"
                                        placeholder="Quantity" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="tags" class="form-label">Tags</label>
                                    <select class="form-control select2" id="tags" name="tags[]" multiple>
                                        <option value="Fashion" selected>Fashion</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Watches">Watches</option>
                                        <option value="Headphones">Headphones</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pricing Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Price Input -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label for="product-price" class="form-label">Price</label>
                                    <input type="number" id="product-price" name="price" class="form-control"
                                        placeholder="Price" required>
                                </div>
                            </div>
                            <!-- Discount Input -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label for="product-discount" class="form-label">Discount</label>
                                    <input type="number" id="product-discount" name="discount" class="form-control"
                                        placeholder="Discount" step="0.01">
                                </div>
                            </div>
                            <!-- Tax Input -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label for="product-tax" class="form-label">Tax (5%)</label>
                                    <input type="number" id="product-tax" name="tax" class="form-control"
                                        placeholder="Tax" step="0.01" readonly>
                                </div>
                            </div>
                            <!-- Total Price Input -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label for="total-price" class="form-label">Total Price (After Discount & Tax)</label>
                                    <input type="number" id="total-price" class="form-control"
                                        placeholder="Total Price" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function calculateTotalPrice() {
                        const priceInput = document.getElementById('product-price');
                        const discountInput = document.getElementById('product-discount');
                        const taxInput = document.getElementById('product-tax');
                        const totalPriceInput = document.getElementById('total-price');

                        const price = parseFloat(priceInput.value) || 0;
                        const discount = parseFloat(discountInput.value) || 0;

                        // Ensure no negative values
                        if (price < 0 || discount < 0) {
                            taxInput.value = '';
                            totalPriceInput.value = '';
                            return;
                        }

                        // Calculate discounted price
                        const discountedPrice = price - (price * (discount / 100));

                        // Calculate 5% tax on discounted price
                        const tax = discountedPrice * 0.05;

                        // Calculate total price
                        const totalPrice = discountedPrice + tax;

                        // Set the calculated values to inputs
                        taxInput.value = tax.toFixed(2);
                        totalPriceInput.value = totalPrice.toFixed(2);
                    }

                    // Add event listeners to trigger calculation on input change
                    document.getElementById('product-price').addEventListener('input', calculateTotalPrice);
                    document.getElementById('product-discount').addEventListener('input', calculateTotalPrice);
                </script>


                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success w-100">Add Costume</button>
                    </div>
                </div>
            </div>
            </form> --}}
            <div class="col-xl-12 col-lg-8">
               <div class="card">
                   <div class="card-header">
                       <h4 class="card-title">Add Costume Photo</h4>
                   </div>
                   <div class="card-body">
                       <!-- File Upload -->
                       {{-- <form action="{{ route('CostumeManagement.store') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white shadow rounded">
                        @csrf
                    
                        <!-- Main Image Upload -->
                        <div class="mb-4">
                            <label for="main-image" class="form-label fw-bold">Main Image</label>
                            <input type="file" name="images[]" id="main-image" class="form-control" multiple required>
                            <img id="imagePreview" class="img-thumbnail mt-2" style="max-width: 200px; display: none;" />
                            @error('image') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    
                        <!-- Costume Info Section -->
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white fw-semibold">Costume Information</div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Costume Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                        @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                    
                                    <div class="col-md-6">
                                        <label class="form-label">Category</label>
                                        <select name="category" class="form-select" required>
                                            <option value="">Choose a category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                    
                                    <div class="col-md-4">
                                        <label class="form-label">Brand</label>
                                        <input type="text" name="brand" class="form-control">
                                    </div>
                    
                                    <div class="col-md-4">
                                        <label class="form-label">Weight</label>
                                        <div class="input-group">
                                            <input type="number" name="weight" class="form-control" required>
                                            <select name="unit" class="form-select">
                                                <option value="gm">gm</option>
                                                <option value="kg">kg</option>
                                            </select>
                                        </div>
                                        @error('weight')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                    
                                    <div class="col-md-4">
                                        <label class="form-label">Gender</label>
                                        <select name="gender" class="form-select" required>
                                            <option value="">Select Gender</option>
                                            <option value="Men">Men</option>
                                            <option value="Women">Women</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @error('gender')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                    
                                <!-- Sizes -->
                                <div class="mt-4">
                                    <label class="form-label">Sizes</label><br>
                                    @foreach (['XS', 'S', 'M', 'L', 'XL', 'XXL', '3XL'] as $size)
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="sizes[]" id="size-{{ $size }}" value="{{ $size }}" class="form-check-input">
                                            <label for="size-{{ $size }}" class="form-check-label">{{ $size }}</label>
                                        </div>
                                    @endforeach
                                </div>
                    
                                <!-- Colors -->
                                <div class="mt-3">
                                    <label class="form-label">Colors</label><br>
                                    @foreach (['dark' => 'Dark', 'yellow' => 'Yellow', 'white' => 'White', 'red' => 'Red', 'green' => 'Green'] as $color => $label)
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="colors[]" id="color-{{ $color }}" value="{{ $color }}" class="form-check-input">
                                            <label for="color-{{ $color }}" class="form-check-label">{{ $label }}</label>
                                        </div>
                                    @endforeach
                                </div>
                    
                                <!-- Description -->
                                <div class="mt-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="4" placeholder="Enter costume details..."></textarea>
                                </div>
                    
                                <!-- Tag Number -->
                                <div class="mt-3">
                                    <label class="form-label">Tag Number</label>
                                    <input type="text" name="tag_number" class="form-control" placeholder="#123456">
                                </div>
                    
                                <!-- Stock -->
                                <div class="mt-3">
                                    <label class="form-label">Stock</label>
                                    <input type="number" name="stock" class="form-control" placeholder="e.g., 100" required>
                                    @error('stock')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                    
                                <!-- Tags -->
                                <div class="mt-3">
                                    <label class="form-label">Tags</label>
                                    <select class="form-select select2" name="tags[]" multiple>
                                        <option value="Fashion">Fashion</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Watches">Watches</option>
                                        <option value="Headphones">Headphones</option>
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
                                    <input type="number" name="price" id="product-price" class="form-control" required>
                                    @error('price')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                    
                                <div class="col-md-3">
                                    <label class="form-label">Discount (%)</label>
                                    <input type="number" name="discount" id="product-discount" class="form-control" step="0.01">
                                </div>
                    
                                <div class="col-md-3">
                                    <label class="form-label">Tax (5%)</label>
                                    <input type="number" name="tax" id="product-tax" class="form-control" step="0.01" readonly>
                                </div>
                    
                                <div class="col-md-3">
                                    <label class="form-label">Total Price</label>
                                    <input type="number" id="total-price" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">➕ Add Costume</button>
                        </div>
                    </form> --}}
                    {{-- <script>
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
                                         --}}
                                         <form action="{{ route('CostumeManagement.store') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white shadow rounded">
                                            @csrf
                                        
                                            <!-- Image Upload -->
                                            <div class="mb-4">
                                                <label class="form-label fw-bold">Main Images</label>
                                                <input type="file" name="images[]" class="form-control" multiple required>
                                                <img id="imagePreview" class="img-thumbnail mt-2" style="max-width: 200px; display: none;" />
                                                @error('images')<div class="text-danger">{{ $message }}</div>@enderror
                                            </div>
                                        
                                            <!-- Costume Info -->
                                            <div class="card mb-4">
                                                <div class="card-header bg-primary text-white">Costume Information</div>
                                                <div class="card-body row g-3">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Costume Name</label>
                                                        <input type="text" name="name" class="form-control" required>
                                                        @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                                                    </div>
                                        
                                                    <div class="col-md-6">
                                                        <label class="form-label">Category</label>
                                                        <select name="category" class="form-select" required>
                                                            <option value="">Choose Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category')<div class="text-danger">{{ $message }}</div>@enderror
                                                    </div>
                                        
                                                    <div class="col-md-4">
                                                        <label class="form-label">Brand</label>
                                                        <input type="text" name="brand" class="form-control">
                                                    </div>
                                        
                                                    <div class="col-md-4">
                                                        <label class="form-label">Weight</label>
                                                        <div class="input-group">
                                                            <input type="number" name="weight" class="form-control" required>
                                                            <select name="unit" class="form-select">
                                                                <option value="gm">gm</option>
                                                                <option value="kg">kg</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                        
                                                    <div class="col-md-4">
                                                        <label class="form-label">Gender</label>
                                                        <select name="gender" class="form-select" required>
                                                            <option value="">Select Gender</option>
                                                            <option value="Men">Men</option>
                                                            <option value="Women">Women</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                        
                                                    <!-- Color-wise Sizes -->
                                                    <div class="col-md-12 mt-4">
                                                        <label class="form-label fw-bold">Select Colors and their Sizes</label>
                                        
                                                        @php
                                                            $colors = ['red' => 'Red', 'black' => 'Black', 'white' => 'White', 'yellow' => 'Yellow', 'green' => 'Green'];
                                                            $sizes = ['XS', 'S', 'M', 'L', 'XL', 'XXL', '3XL'];
                                                        @endphp
                                        
                                                        @foreach ($colors as $key => $label)
                                                            <div class="mb-3 border rounded p-3">
                                                                <!-- Color Checkbox -->
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input toggle-size" id="color-{{ $key }}" name="colors[{{ $key }}]" value="{{ $label }}">
                                                                    <label class="form-check-label fw-semibold" for="color-{{ $key }}">{{ $label }}</label>
                                                                </div>
                                        
                                                                <!-- Size checkboxes (initially hidden) -->
                                                                <div class="ms-4 mt-2 size-options" id="sizes-{{ $key }}" style="display: none;">
                                                                    <label class="form-label">Sizes for {{ $label }}</label><br>
                                                                    @foreach ($sizes as $size)
                                                                        <div class="form-check form-check-inline">
                                                                            <input type="checkbox" class="form-check-input" name="color_sizes[{{ $key }}][]" value="{{ $size }}" id="size-{{ $key }}-{{ $size }}">
                                                                            <label class="form-check-label" for="size-{{ $key }}-{{ $size }}">{{ $size }}</label>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                        
                                                    <div class="col-md-12">
                                                        <label class="form-label">Description</label>
                                                        <textarea name="description" class="form-control" rows="4"></textarea>
                                                    </div>
                                        
                                                    <div class="col-md-6">
                                                        <label class="form-label">Tag Number</label>
                                                        <input type="text" name="tag_number" class="form-control" placeholder="#123456">
                                                    </div>
                                        
                                                    <div class="col-md-6">
                                                        <label class="form-label">Stock</label>
                                                        <input type="number" name="stock" class="form-control" placeholder="e.g., 100" required>
                                                    </div>
                                        
                                                    <div class="col-md-12">
                                                        <label class="form-label">Tags</label>
                                                        <select class="form-select select2" name="tags[]" multiple>
                                                            <option value="Fashion">Fashion</option>
                                                            <option value="Electronics">Electronics</option>
                                                            <option value="Watches">Watches</option>
                                                            <option value="Headphones">Headphones</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <!-- Pricing Section -->
                                            <div class="card mb-4">
                                                <div class="card-header bg-info text-white">Pricing Details</div>
                                                <div class="card-body row g-3">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Price</label>
                                                        <input type="number" name="price" id="product-price" class="form-control" required>
                                                    </div>
                                        
                                                    <div class="col-md-3">
                                                        <label class="form-label">Discount (%)</label>
                                                        <input type="number" name="discount" id="product-discount" class="form-control" step="0.01">
                                                    </div>
                                        
                                                    <div class="col-md-3">
                                                        <label class="form-label">Tax (5%)</label>
                                                        <input type="number" name="tax" id="product-tax" class="form-control" step="0.01" readonly>
                                                    </div>
                                        
                                                    <div class="col-md-3">
                                                        <label class="form-label">Total Price</label>
                                                        <input type="number" id="total-price" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-success btn-lg">➕ Add Costume</button>
                                            </div>
                                        </form>
                                        <script>
                                            // Image preview
                                            document.querySelector('input[type="file"]').addEventListener("change", function () {
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
                                                const discounted = price - (price * discount / 100);
                                                const tax = discounted * 0.05;
                                                document.getElementById('product-tax').value = tax.toFixed(2);
                                                document.getElementById('total-price').value = (discounted + tax).toFixed(2);
                                            }
                                        
                                            document.getElementById('product-price').addEventListener('input', calculateTotalPrice);
                                            document.getElementById('product-discount').addEventListener('input', calculateTotalPrice);
                                        
                                            // Toggle size dropdowns based on color selection
                                            document.querySelectorAll('.toggle-size').forEach(checkbox => {
                                                checkbox.addEventListener('change', function () {
                                                    const key = this.id.replace('color-', '');
                                                    document.getElementById('sizes-' + key).style.display = this.checked ? 'block' : 'none';
                                                });
                                            });
                                        </script>
                                                                                
           </div>
           
        </div>
    </div>
    <!-- End Container Fluid -->
    {{-- <script>
        function addProductCard(product) {
            const container = document.getElementById('productContainer');

            const card = document.createElement('div');
            card.className = 'col-xl-3 col-lg-4';

            card.innerHTML = `
                            <div class="card">
                                <div class="card-body">
                                    <img src="${product.image}" alt="" class="img-fluid rounded bg-light">
                                    <div class="mt-3">
                                        <h4>${product.name} <span class="fs-14 text-muted ms-1">(${product.category})</span></h4>
                                        <h5 class="text-dark fw-medium mt-3">Price :</h5>
                                        <h4 class="fw-semibold text-dark mt-2 d-flex align-items-center gap-2">
                                            <span class="text-muted text-decoration-line-through">$${product.oldPrice}</span> $${product.newPrice}
                                            <small class="text-muted">(${product.discount}% Off)</small>
                                        </h4>
                                        <div class="mt-3">
                                            <h5 class="text-dark fw-medium">Size :</h5>
                                            <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" class="btn-check" id="size-s">
                                                <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-s">S</label>
                    
                                                <input type="checkbox" class="btn-check" id="size-m" checked>
                                                <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-m">M</label>
                    
                                                <input type="checkbox" class="btn-check" id="size-xl">
                                                <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xl">XL</label>
                    
                                                <input type="checkbox" class="btn-check" id="size-xxl">
                                                <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xxl">XXL</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h5 class="text-dark fw-medium">Colors :</h5>
                                            <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" class="btn-check" id="color-dark">
                                                <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-dark"> <i class="bx bxs-circle fs-18 text-dark"></i></label>
                    
                                                <input type="checkbox" class="btn-check" id="color-yellow">
                                                <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-yellow"> <i class="bx bxs-circle fs-18 text-warning"></i></label>
                    
                                                <input type="checkbox" class="btn-check" id="color-white">
                                                <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-white"> <i class="bx bxs-circle fs-18 text-white"></i></label>
                    
                                                <input type="checkbox" class="btn-check" id="color-red">
                                                <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-red"> <i class="bx bxs-circle fs-18 text-danger"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-light-subtle">
                                    <div class="row g-2">
                                        <div class="col-lg-6">
                                            <a href="#!" class="btn btn-outline-secondary w-100">Create Product</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#!" class="btn btn-primary w-100">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;

            container.appendChild(card);
        }

        // Example Usage
        const newProduct = {
            name: "Men Black Slim Fit T-shirt",
            category: "Fashion",
            image: "assets/images/product/p-1.png",
            oldPrice: 100,
            newPrice: 80,
            discount: 30
        };

        // Add on some action, like a button click
        document.addEventListener('DOMContentLoaded', () => {
            // Automatically add on load for demo
            addProductCard(newProduct);
        });
    </script> --}}
@endsection
