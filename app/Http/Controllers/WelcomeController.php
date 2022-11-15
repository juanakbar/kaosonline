<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\ProductsResource;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::whereHas('products')->get();
        // dd($category);
        $products = Product::query()
            ->with('category')
            ->when($request->category, fn ($q, $v) => $q->whereBelongsTo(Category::where('slug', $v)->first()))
            ->select('id', 'price', 'slug', 'name', 'picture', 'category_id')
            ->paginate(12)
            ->withQueryString();
        return view('welcome', [
            'products' => ProductsResource::collection($products)
        ]);
    }
}
