<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Start the query builder for the Product model
        $query = Product::query();

        // Apply filters based on request parameters
        if ($request->has('category') && $request->category != '') {
            $query->where('category_id', $request->category);
        }

        if ($request->has('subcategory') && $request->subcategory != '') {
            $query->where('subcategory_id', $request->subcategory);
        }

        // Paginate the results (e.g., 12 products per page)
        $products = $query->orderBy('name')->paginate(12);

        // Fetch categories and subcategories for the filters
        $categories = Category::all();
        $subcategories = Subcategory::all();

        // Pass the data to the view
        return view('catalog.index', compact('products', 'categories', 'subcategories'));
    }
}
