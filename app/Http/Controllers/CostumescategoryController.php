<?php

namespace App\Http\Controllers;

use App\Models\CostumesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CostumesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CostumesCategory::all();
        return view('Admin.CostumeCategoryManagement.list', compact('categories'));
    }
    

    public function create(){
        return view('Admin.CostumeCategoryManagement.add_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:costumescategories,slug',
'image' => 'nullable|image|max:10240' // 10MB
        ]);
    
        $slug = $request->filled('slug') ? Str::slug($request->slug) : Str::slug($request->name);
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('costumes_categories', 'public');
        }
    
        $category = CostumesCategory::create([
            'name' => $request->name,
            'slug' => $slug,
            'image' => $imagePath
        ]);
    
        // Redirect back with success message
        return redirect()->route('costumecategories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */

     public function edit($id)
{
    $category = CostumesCategory::findOrFail($id);
    return view('Admin.CostumeCategoryManagement.edit_category', compact('category'));
}
    public function show($id)
    {
        $category = CostumesCategory::findOrFail($id);
        return view('Admin.CostumeCategoryManagement.show', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CostumesCategory $costumesCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048'
        ]);

        $slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('costumes_categories', 'public');
            $costumesCategory->image = $imagePath;
        }

        $costumesCategory->name = $request->name;
        $costumesCategory->slug = $slug;
        $costumesCategory->save();

        return response()->json($costumesCategory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CostumesCategory $costumesCategory)
    {
        // Optional: delete associated image from storage
        if ($costumesCategory->image) {
            Storage::disk('public')->delete($costumesCategory->image);
        }
    
        $costumesCategory->delete();
    
        return redirect()->route('costumecategories.index')
                         ->with('success', 'Category deleted successfully.');
    }
}
