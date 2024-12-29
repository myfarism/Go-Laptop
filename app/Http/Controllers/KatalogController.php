<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search', '');
        $min_price = $request->input('min_price', 0);
        $max_price = $request->input('max_price', 50000);

        $laptops = Laptop::whereBetween('harga', [$min_price, $max_price])
            ->where('nama_laptop', 'like', "%$search%")
            ->get();

        return view('katalog', compact('laptops'));
    }
    
}
