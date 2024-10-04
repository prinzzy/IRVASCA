<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        // Fetch products that belong to the "banner" category
        $bannerProducts = Product::with('category', 'subcategory')
            ->whereHas('category', function ($query) {
                $query->where('name', 'banner');
            })->get();

        // Fetch featured products
        $featuredProducts = Product::with('category', 'subcategory')
            ->whereHas('category', function ($query) {
                $query->where('name', 'Featured');
            })->get();

        // Return the view with both banner and featured products
        return view('home.index', compact('bannerProducts', 'featuredProducts'));
    }

    public function showProduct($id)
    {
        $product = Product::with('category', 'subcategory')->findOrFail($id);

        return view('home.04_single_product', compact('product'));
    }
}
