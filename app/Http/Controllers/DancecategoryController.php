<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanceCategory;
use Illuminate\Support\Str;

class DanceCategoryController extends Controller
{
    // Show all dance categories
    public function index()
    {
        $categories = DanceCategory::all();
        // dd($categories); // Add this to check if categories are retrieved correctly
        return view('Admin.DanceCategoryManagement.list', compact('categories'));
    }
    // Show the form to create a new category
    public function create()
    {
        return view('Admin.DanceCategoryManagement.add_catgory');
    }

    // Store a new category
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:dancecategories,slug',
            'image' => 'nullable|image|max:2048',  // Ensure it handles image uploads
        ]);
    
        // If an image is uploaded, store it in the 'public' disk and save the path
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('dancecategories', 'public');
        }
    
        // Create the new dance category
        DanceCategory::create([
            'name' => $validated['name'],
            'slug' => $validated['slug'] ?? \Str::slug($validated['name']), // Generate slug from name if not provided
            'image' => $imagePath,
        ]);
    
        // Redirect back with success message
        return redirect()->route('dancecategories.index')->with('success', 'Category created successfully.');
    }
    
    

    // Show form to edit a category
    public function edit($id)
    {
        $category = DanceCategory::findOrFail($id);
        return view('admin.dancecategories.edit', compact('category'));
    }

    // Update category
    public function update(Request $request, $id)
    {
        $category = DanceCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $category->image = $request->file('image')->store('dancecategories', 'public');
        }

        $category->save();

        return redirect()->route('dancecategories.index')->with('success', 'Category updated successfully!');
    }

    // Delete category
    public function destroy($id)
    {
        $category = DanceCategory::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted!');
    }
}
