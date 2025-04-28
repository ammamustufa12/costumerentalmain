<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costumes;
use App\Models\InstrumentRental;
use App\Models\Rental;
use Illuminate\Support\Facades\DB; // Add this line
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Aggregate rentals per month
        $rentals = DB::table('rentals')
            ->select(
                DB::raw('MONTH(created_at) as month_number'),
                DB::raw('MONTHNAME(created_at) as month_name'),
                DB::raw('COUNT(*) as rental_count'),
                DB::raw('SUM(price) as total_revenue')
            )
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy(DB::raw('MONTH(created_at)'), DB::raw('MONTHNAME(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->get();
    
        // Prepare data for the chart
        $months = $rentals->pluck('month_name');
        $rentalCounts = $rentals->pluck('rental_count');
        $revenues = $rentals->pluck('total_revenue');
    
        // Pass data to the view
        return view('dashboard', compact('months', 'rentalCounts', 'revenues'));
    }
}
