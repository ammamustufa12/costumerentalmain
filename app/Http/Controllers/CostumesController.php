<?php

namespace App\Http\Controllers;

use App\Models\Costumes;
use App\Models\CostumesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CostumesController extends Controller
{


    public function index()
    {
       $costumes = costumes::with('category')->paginate(10);
       return view('Admin.CostumeManagement.list_costume', compact('costumes'));
    }
    public function create()
{
    // Fetch costume categories from the database
    $categories = CostumesCategory::all(); // Assuming the table is 'costume_categories'

    return view('Admin.CostumeManagement.add_costume', compact('categories'));
}
 
// public function store(Request $request)
// {
//     $request->validate([
//         'images.*' => 'nullable|image|max:2048', // validate multiple images
//         'name' => 'required|string|max:255',
//         'category' => 'required|exists:costumescategories,id',
//         'brand' => 'nullable|string|max:255',
//         'weight' => 'required|numeric',
//         'unit' => 'nullable|string',
//         'gender' => 'required|string',
//         'sizes' => 'nullable|array',
//         'colors' => 'nullable|array',
//         'tags' => 'nullable|array',
//         'description' => 'nullable|string',
//         'tag_number' => 'nullable|string|max:255',
//         'stock' => 'required|integer',
//         'price' => 'required|numeric',
//         'discount' => 'nullable|numeric',
//         'tax' => 'nullable|numeric',
//     ]);

//     $imagePaths = [];

//     if ($request->hasFile('images')) {
//         foreach ($request->file('images') as $image) {
//             $path = $image->store('costumes/images', 'public');
//             $imagePaths[] = $path;
//         }
//     }

//     Costumes::create([
//         'name' => $request->name,
//         'category_id' => $request->category,
//         'brand' => $request->brand,
//         'weight' => $request->weight,
//         'unit' => $request->unit,
//         'gender' => $request->gender,
//         'sizes' => $request->sizes ?? [],
//         'colors' => $request->colors ?? [],
//         'tags' => $request->tags ?? [],
//         'description' => $request->description,
//         'tag_number' => $request->tag_number,
//         'stock' => $request->stock,
//         'price' => $request->price,
//         'discount' => $request->discount ?? 0,
//         'tax' => $request->tax ?? 0,
//         'images' => $imagePaths,
//     ]);

//     return redirect()->route('CostumeManagement.index')->with('success', 'Costume created successfully!');
// }
public function store(Request $request)
{
    $request->validate([
        'images.*' => 'nullable|image|max:2048',
        'name' => 'required|string|max:255',
        'category' => 'required|exists:costumescategories,id',
        'brand' => 'nullable|string|max:255',
        'weight' => 'required|numeric',
        'unit' => 'nullable|string',
        'gender' => 'required|string',
        'tags' => 'nullable|array',
        'description' => 'nullable|string',
        'tag_number' => 'nullable|string|max:255',
        'stock' => 'required|integer',
        'price' => 'required|numeric',
        'discount' => 'nullable|numeric',
        'tax' => 'nullable|numeric',
        'color_sizes' => 'nullable|array', // new field
    ]);

    $imagePaths = [];

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('costumes/images', 'public');
            $imagePaths[] = $path;
        }
    }

    // Calculate total price
    $discounted = $request->price - ($request->price * ($request->discount ?? 0) / 100);
    $tax = $request->tax ?? 0;
    $total = $discounted + $tax;

    Costumes::create([
        'name' => $request->name,
        'category_id' => $request->category,
        'brand' => $request->brand,
        'weight' => $request->weight,
        'unit' => $request->unit,
        'gender' => $request->gender,
        'tags' => $request->tags ?? [],
        'description' => $request->description,
        'tag_number' => $request->tag_number,
        'stock' => $request->stock,
        'price' => $request->price,
        'discount' => $request->discount ?? 0,
        'tax' => $tax,
        'total_price' => $total,
        'images' => $imagePaths,
        'color_size' => $request->color_sizes ?? [],
    ]);

    return redirect()->route('CostumeManagement.index')->with('success', 'Costume created successfully!');
}

       
     
     
     public function uploadGalleryImage(Request $request)
{
    if ($request->hasFile('file')) {
        $path = $request->file('file')->store('costumes/gallery', 'public');
        return response()->json(['file_path' => $path]);
    }

    return response()->json(['error' => 'No file uploaded'], 400);
}

 
public function show($id)
{
    $costume = Costumes::with('category')->findOrFail($id);
    return view('Admin.CostumeManagement.show_costume', compact('costume'));
}

     // Show the list of costumes (index page)
   
 
     // Show the edit form for a costume
     public function edit($id)
     {
         $costume = costumes::findOrFail($id);
         $categories = CostumesCategory::all();
     
         return view('Admin.CostumeManagement.edit_costume', compact('costume', 'categories'));
     }
 
     // Update an existing costume
     public function update(Request $request, $id)
     {
         $request->validate([
             'images.*' => 'nullable|image|max:2048',
             'name' => 'required|string|max:255',
             'category' => 'required|exists:costumescategories,id',
             'brand' => 'nullable|string|max:255',
             'weight' => 'required|numeric',
             'unit' => 'nullable|string',
             'gender' => 'required|string',
             'sizes' => 'nullable|array',
             'colors' => 'nullable|array',
             'tags' => 'nullable|array',
             'description' => 'nullable|string',
             'tag_number' => 'nullable|string|max:255',
             'stock' => 'required|integer',
             'price' => 'required|numeric',
             'discount' => 'nullable|numeric',
             'tax' => 'nullable|numeric',
         ]);
     
         $costume = costumes::findOrFail($id);
     
         $costumeData = [
             'name' => $request->name,
             'category_id' => $request->category,
             'brand' => $request->brand,
             'weight' => $request->weight,
             'unit' => $request->unit,
             'gender' => $request->gender,
             'sizes' => $request->sizes ?? [],
             'colors' => $request->colors ?? [],
             'tags' => $request->tags ?? [],
             'description' => $request->description,
             'tag_number' => $request->tag_number,
             'stock' => $request->stock,
             'price' => $request->price,
             'discount' => $request->discount ?? 0,
             'tax' => $request->tax ?? 0,
         ];
     
         // Handle images if any
         if ($request->hasFile('images')) {
             if ($costume->images) {
                 foreach ($costume->images as $image) {
                     Storage::disk('public')->delete($image);
                 }
             }
     
             $imagePaths = [];
             foreach ($request->file('images') as $image) {
                 $imagePaths[] = $image->store('costumes/images', 'public');
             }
             $costumeData['images'] = $imagePaths;
         }
     
         $costume->update($costumeData);
     
         return redirect()->route('CostumeManagement.index')->with('success', 'Costume updated successfully!');
     }
     
 
     // Delete a costume
     public function destroy($id)
     {
         $costume = costumes::findOrFail($id);
 
         // Delete images from storage
         if ($costume->images) {
             foreach ($costume->images as $image) {
                 Storage::disk('public')->delete($image);
             }
         }
 
         // Delete the costume record
         $costume->delete();
 
         // Redirect with success message
         return redirect()->route('CostumeManagement.index')->with('success', 'Costume deleted successfully!');
     } 
}
