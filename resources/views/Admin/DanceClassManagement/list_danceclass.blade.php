@extends('Admin_layouts.layout')
@section('content')

<!-- Start Container Fluid -->
<div class="container-xxl">

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">All Dance Classes</h4>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('danceclasses.create') }}" class="btn btn-primary btn-sm rounded">
                            + Add Dance Class
                        </a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                This Month
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#!" class="dropdown-item">Download</a>
                                <a href="#!" class="dropdown-item">Export</a>
                                <a href="#!" class="dropdown-item">Import</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Class Name</th>
                                    <th>Category</th>
                                    <th>Instructor</th>
                                    <th>Schedule</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($danceClasses as $index => $class)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            @php
                                                $images = is_array($class->images) ? $class->images : json_decode($class->images, true);
                                                $firstImage = $images[0] ?? null;
                                                $imagePath = $firstImage ? asset('storage/' . $firstImage) : asset('frontend_assets/images/default-class.jpg');
                                            @endphp
                        
                                            <img src="{{ $imagePath }}" alt="{{ $class->name }}" class="img-thumbnail" style="width: 60px; height: 60px; object-fit: cover;">
                                        </td>
                                        <td><strong>{{ $class->name }}</strong></td>
                                        <td>
                                            <span class="badge bg-primary">{{ $class->category->name ?? 'N/A' }}</span>
                                        </td>
                                        <td>{{ $class->instructor }}</td>
                                        <td>
                                            <span class="badge bg-info text-dark">
                                                {{ \Carbon\Carbon::parse($class->schedule)->format('d M Y, h:i A') }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-success fw-semibold">
                                                AED {{ number_format($class->price, 2) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('danceclasses.edit', $class->id) }}" class="btn btn-sm btn-outline-warning me-1">
                                                ✏️ Edit
                                            </a>
                                            <form action="{{ route('danceclasses.destroy', $class->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this class?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    🗑️ Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted py-4">No dance classes found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        
                    </div>
                </div>

                <div class="card-footer border-top">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Container Fluid -->

@endsection
