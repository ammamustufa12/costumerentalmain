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
                       <p><strong>Name:</strong> {{ $category->name }}</p>
                       <p><strong>Slug:</strong> {{ $category->slug }}</p>
                       <p><strong>Image:</strong><br>
                           @if($category->image)
                               <img src="{{ asset('storage/' . $category->image) }}" width="100">
                           @else
                               <span class="text-muted">No image</span>
                           @endif
                       </p>
                       <a href="{{ route('costumecategories.index') }}" class="btn btn-secondary">⬅️ Back</a>



                    </div>
           
                </div>
            </div>
            <!-- End Container Fluid -->
         
        @endsection
        