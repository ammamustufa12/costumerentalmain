<?php

namespace App\Http\Controllers;

use App\Models\DanceClass;
use App\Models\DanceCategory;
use App\Models\User;
use Illuminate\Http\Request;

class DanceClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all dance classes along with their related category
        $danceClasses = DanceClass::with(['category', 'user'])->get();
        return view('Admin.DanceClassManagement.list_danceclass', compact('danceClasses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DanceCategory::all();
    
        // Get only users whose role_id = 2 (Instructor)
        $users = User::where('role_id', 2)->get();
    
        return view('Admin.DanceClassManagement.Add_danceclass', compact('categories', 'users'));
    }
    /**
     * Store a newly created resource in storage.
     */
   

public function store(Request $request)
{
    // Validate input
    $validated = $request->validate([
        'dance_category_id' => 'required|exists:dancecategories,id',
        'user_id'            => 'required|exists:users,id',
        'name'               => 'required|string|max:255',
        'instructor'         => 'required|string|max:255',
        'schedule'           => 'required|date',
        'price'              => 'required|numeric',
        'images.*' => 'nullable|image|max:2048', // validate multiple images
    ]);

    // Handle image upload (like DanceCategory)
    // $imagePath = null;
    // if ($request->hasFile('image')) {
    //     $imagePath = $request->file('image')->store('dance_class_images', 'public');
    // }
    $imagePaths = [];

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('danceclass/images', 'public');
            $imagePaths[] = $path;
        }
    }

    // Create dance class
    DanceClass::create([
        'dance_category_id' => $validated['dance_category_id'],
        'user_id'           => $validated['user_id'],
        'name'              => $validated['name'],
        'instructor'        => $validated['instructor'],
        'schedule'          => $validated['schedule'],
        'price'             => $validated['price'],
        'images'             => $imagePaths,
    ]);

    return redirect()->route('danceclasses.index')->with('success', 'Dance class created successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(DanceClass $danceClass)
    {
        // Show the specific dance class with its category
        return view('Admin.DanceClassManagement.show', compact('danceClass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DanceClass $danceClass)
    {
        // Get all categories to update the class
        $categories = DanceCategory::all();
        return view('Admin.DanceClassManagement.edit', compact('danceClass', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DanceClass $danceClass)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'dance_category_id' => 'required|exists:dancecategories,id',
            'name' => 'required|string|max:255',
            'instructor' => 'required|string|max:255',
            'schedule' => 'required|date',
            'price' => 'required|numeric',
        ]);

        // Update the dance class data
        $danceClass->update($validated);

        // Redirect back with a success message
        return redirect()->route('danceclasses.index')->with('success', 'Dance class updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DanceClass $danceClass)
    {
        // Delete the dance class
        $danceClass->delete();

        // Redirect back with a success message
        return redirect()->route('danceclasses.index')->with('success', 'Dance class deleted successfully!');
    }
}
