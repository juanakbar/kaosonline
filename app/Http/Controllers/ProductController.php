<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->paginate(12);
        return view('product.index', compact('products'));
    }

    public function show(Product $product)
    {
        $colors = Color::get();
        $size = Size::get();
        return view('product.show', compact('product', 'colors', 'size'));
    }
}
