<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Laptop;
use App\Models\Rental;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->session()->get('user_logged_in')) {
            return redirect()->route('login')->with('error', 'You must be logged in to access the dashboard.');
        }

        $availableLaptops = Laptop::where('status', 'tidak disewa')->count();
        $activeRentals = Laptop::where('status', 'disewa')->count();
        $laptops = Laptop::all();
        
        return view('admin.dashboard', compact('availableLaptops', 'activeRentals', 'laptops'));
    }
}