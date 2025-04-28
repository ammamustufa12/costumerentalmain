<?php
// app/Http/Controllers/RentalController.php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\User;
use App\Models\Costumes;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::with(['user', 'costume']) // Eager loading relationships
                         ->latest()                // Sorts by latest (usually by created_at desc)
                         ->paginate(10);           // Pagination (10 items per page)
    
        return view('Admin.RentalManagement.list_rental', compact('rentals')); // Passing to blade
    }

    public function create()
    {
        $users = User::all();
        $costumes = Costumes::all();
        return view('Admin.RentalManagement.Add_rental', compact('users', 'costumes'));
    }
    public function getCostumePrice($id)
    {
        $costume = Costume::find($id);
        if ($costume) {
            return response()->json(['price' => $costume->price]);
        }
        return response()->json(['price' => 0]);
    }
    


    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'costume_id' => 'required|exists:costumes,id',
            'rental_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:rental_date',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:pending,confirmed,cancelled,completed',
        ]);

        Rental::create($request->all());

        return redirect()->route('rentals.index')->with('success', 'Rental created successfully.');
    }

    public function show(Rental $rental)
    {
        return view('rentals.show', compact('rental'));
    }

    public function edit(Rental $rental)
    {
        $users = User::all();
        $costumes = Costume::all();
        return view('rentals.edit', compact('rental', 'users', 'costumes'));
    }

    public function update(Request $request, Rental $rental)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'costume_id' => 'required|exists:costumes,id',
            'rental_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:rental_date',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:pending,confirmed,cancelled,completed',
        ]);

        $rental->update($request->all());

        return redirect()->route('rentals.index')->with('success', 'Rental updated successfully.');
    }

    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('rentals.index')->with('success', 'Rental deleted successfully.');
    }
}
