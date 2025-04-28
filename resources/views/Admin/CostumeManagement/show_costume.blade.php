@extends('Admin_layouts.layout')
@section('content')
    <!-- Start Container Fluid -->
    <div class="container-xxl">

        <div class="row">
      
            <div class="col-xl-12 col-lg-8">
               <div class="card">
                   <div class="card-header">
                       <h4 class="card-title">Show Costume </h4>
                   </div>
                   <div class="card-body">
                       <!-- File Upload -->
    {{-- Costume Images --}}
    <div class="mb-3">
        <strong>Images:</strong><br>
        @php
            $images = is_array($costume->images) ? $costume->images : json_decode($costume->images, true);
        @endphp
        @if($images)
            @foreach($images as $img)
                <img src="{{ asset('storage/' . $img) }}" class="img-thumbnail me-2 mb-2" style="width: 100px; height: 100px; object-fit: cover;">
            @endforeach
        @else
            <span class="text-muted">No images</span>
        @endif
    </div>

    <p><strong>Name:</strong> {{ $costume->name }}</p>
    <p><strong>Category:</strong> {{ $costume->category->name ?? 'N/A' }}</p>
    <p><strong>Brand:</strong> {{ $costume->brand ?? '-' }}</p>
    <p><strong>Weight:</strong> {{ $costume->weight }} {{ $costume->unit ?? '' }}</p>
    <p><strong>Gender:</strong> {{ ucfirst($costume->gender) }}</p>
    <p><strong>Sizes:</strong> {{ $costume->sizes ? implode(', ', $costume->sizes) : '-' }}</p>
    <p><strong>Colors:</strong> {{ $costume->colors ? implode(', ', $costume->colors) : '-' }}</p>
    <p><strong>Tags:</strong> {{ $costume->tags ? implode(', ', $costume->tags) : '-' }}</p>
    <p><strong>Description:</strong><br>{{ $costume->description ?? '-' }}</p>
    <p><strong>Tag Number:</strong> {{ $costume->tag_number ?? '-' }}</p>
    <p><strong>Stock:</strong> {{ $costume->stock }}</p>
    <p><strong>Price:</strong> AED {{ number_format($costume->price, 2) }}</p>
    <p><strong>Discount:</strong> AED {{ number_format($costume->discount, 2) }}</p>
    <p><strong>Tax:</strong> AED {{ number_format($costume->tax, 2) }}</p>

    <a href="{{ route('CostumeManagement.index') }}" class="btn btn-secondary mt-3">⬅️ Back to List</a>

                    </div>
           
                </div>
            </div>
            <!-- End Container Fluid -->
         
        @endsection
        