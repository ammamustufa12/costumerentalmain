<?php

namespace App\Http\Controllers;

use App\Models\InstrumentRental;
use App\Models\InstrumentRentalCategory;
use Illuminate\Http\Request;

class InstrumentRentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Request $request)
    // {
    //     $search = $request->input('search');

    //     $instruments = InstrumentRental::with('instrumentRentalCategory') // Eager load category to avoid N+1 query problem
    //         ->when($search, function ($query, $search) {
    //             $query->where('name', 'like', "%{$search}%");
    //         })
    //         ->orderBy('created_at', 'desc')
    //         ->paginate(10);
    
    //     return view('Admin.instrumentrental.index', compact('instruments'));
    // }
    public function index(Request $request)
{
    $search = $request->input('search');

    // Eager load instrumentRentalCategory and apply search filter if provided
    $instruments = InstrumentRental::with('instrumentRentalCategory') // Eager load category to avoid N+1 query problem
        ->when($search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })
        ->orderBy('created_at', 'desc') // Order by latest instruments first
        ->paginate(10); // Paginate results to display 10 per page

    // Return view with the instruments data
    return view('Admin.instrumentrental.index', compact('instruments'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = InstrumentRentalCategory::all();
        return view('Admin.instrumentrental.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'price_per_day' => 'required|numeric',
            'instrumentrentalcategory_id' => 'required|exists:instrumentrentalcategories,id',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('instrumentrental', 'public');
        }

        InstrumentRental::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'image' => $imagePath,
            'price_per_day' => $validated['price_per_day'],
            'instrumentrentalcategory_id' => $validated['instrumentrentalcategory_id'],
        ]);

        return redirect()->route('instrumentrentals.index')->with('success', 'Instrument rental created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(InstrumentRental $instrumentrental)
    {
        return view('Admin.instrumentrental.show', compact('instrumentrental'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstrumentRental $instrumentrental)
    {
        $categories = InstrumentRentalCategory::all();
        return view('Admin.instrumentrental.edit', compact('instrumentrental', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InstrumentRental $instrumentrental)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'price_per_day' => 'required|numeric',
            'instrumentrentalcategory_id' => 'required|exists:instrumentrentalcategories,id',
        ]);

        $imagePath = $instrumentrental->image;
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($instrumentrental->image) {
                Storage::disk('public')->delete($instrumentrental->image);
            }
            $imagePath = $request->file('image')->store('instrumentrental', 'public');
        }

        $instrumentrental->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'image' => $imagePath,
            'price_per_day' => $validated['price_per_day'],
            'instrumentrentalcategory_id' => $validated['instrumentrentalcategory_id'],
        ]);

        return redirect()->route('instrumentrentals.index')->with('success', 'Instrument rental updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstrumentRental $instrumentrental)
    {
        if ($instrumentrental->image) {
            Storage::disk('public')->delete($instrumentrental->image);
        }

        $instrumentrental->delete();

        return redirect()->route('instrumentrentals.index')->with('success', 'Instrument rental deleted successfully.');
    }
}
