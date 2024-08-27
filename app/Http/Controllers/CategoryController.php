<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('products.index', compact('categories'));
    }

    public function create()
    {
        return view('products.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ], [
            'name.unique' => 'The category name already exists. Please choose a different name.',
        ]);

        Category::create($request->all());

        return redirect()->route('products.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('products.index', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ], [
            'name.unique' => 'The category name already exists. Please choose a different name.',
        ]);
        
        $category->update($request->all());

        return redirect()->route('products.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('products.index')->with('success', 'Category deleted successfully.');
    }
}
