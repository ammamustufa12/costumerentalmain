<?php

namespace App\Http\Controllers;

use App\Models\InstrumentRentalCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class InstrumentRentalCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $categories = InstrumentRentalCategory::when($search, function ($query, $search) {
        $query->where('name', 'like', "%{$search}%");
    })->orderBy('created_at', 'desc')->paginate(10);

    return view('Admin.instrumentrentalcategories.index', compact('categories'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.instrumentrentalcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:instrumentrentalcategories,slug',
            'image' => 'nullable|image|max:2048',  // Ensure it handles image uploads
        ]);
    
        // If an image is uploaded, store it in the 'public' disk and save the path
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('instrumentrentalcategories', 'public');
        }
    
        // Create the new instrument rental category
        InstrumentRentalCategory::create([
            'name' => $validated['name'],
            'slug' => $validated['slug'] ?? \Str::slug($validated['name']), // Generate slug from name if not provided
            'image' => $imagePath,
        ]);
    
        // Redirect back with success message
        return redirect()->route('instrumentrentalcategories.index')->with('success', 'Category created successfully.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(InstrumentRentalCategory $instrumentRentalCategory)
    {
        return view('Admin.instrumentrentalcategories.view', compact('instrumentRentalCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstrumentRentalCategory $instrumentRentalCategory)
    {
        return view('Admin.instrumentrentalcategories.edit', compact('instrumentRentalCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InstrumentRentalCategory $instrumentRentalCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:instrumentrentalcategories,slug,' . $instrumentRentalCategory->id,
            'image' => 'nullable|image|max:2048',
        ]);

        $slug = $validated['slug'] ?? Str::slug($validated['name']);

        if ($request->hasFile('image')) {
            if ($instrumentRentalCategory->image) {
                Storage::disk('public')->delete($instrumentRentalCategory->image);
            }
            $imagePath = $request->file('image')->store('instrumentrentalcategories', 'public');
            $instrumentRentalCategory->image = $imagePath;
        }

        $instrumentRentalCategory->update([
            'name' => $validated['name'],
            'slug' => $slug,
            'image' => $instrumentRentalCategory->image,
        ]);

        return redirect()->route('instrumentrentalcategories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstrumentRentalCategory $instrumentRentalCategory)
    {
        if ($instrumentRentalCategory->image) {
            Storage::disk('public')->delete($instrumentRentalCategory->image);
        }

        $instrumentRentalCategory->delete();

        return redirect()->route('instrumentrentalcategories.index')->with('success', 'Category deleted successfully.');
    }
}
