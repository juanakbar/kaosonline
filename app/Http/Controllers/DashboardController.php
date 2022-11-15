<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);
        return view('admin.index', [
            'layout' => 'side-menu',
            'products' => $products
        ]);
    }
}
