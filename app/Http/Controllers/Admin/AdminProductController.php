<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category', 'subcategory')->get();
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('admin.products.index', compact('products', 'categories', 'subcategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'original_price' => 'nullable|numeric',
            'discount_price' => 'nullable|numeric',
            'star_rating' => 'nullable|numeric|min:0|max:5',
            'sizes' => 'array', // Ensure sizes are provided
            'sizes.*.size' => 'string', // Validate each size
            'sizes.*.stock' => 'integer|min:0', // Validate stock for each size
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:100000', // Primary image
            'images' => 'nullable|array', // Multiple images
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:100000',
            'thumbnails' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:100000', // Thumbnail
        ]);

        $data = $request->except(['image', 'images', 'thumbnails', 'sizes']); // Exclude images & thumbnail from $data initially

        // Handle primary image (image_path)
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Check if the file was uploaded
            Log::info('Uploaded Image Info:', [
                'original_name' => $image->getClientOriginalName(),
                'mime_type' => $image->getMimeType(),
                'size' => $image->getSize(),
            ]);

            $imageName = strtolower(trim($request->input('name'))) . '.' . $image->getClientOriginalExtension(); // Name the image after the product
            $imagePath = $image->storeAs('product_images', $imageName, 'public'); // Store image
            $data['image_path'] = $imagePath; // Save the path to the database
        } else {
            Log::warning('No primary image uploaded.');
        }

        // Handle additional images (images)
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = strtolower(trim($request->input('name'))) . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $imagePaths[] = $image->storeAs('product_images', $imageName, 'public');
            }
            $data['images'] = json_encode($imagePaths); // Store image paths as JSON
        }

        // Handle thumbnail
        if ($request->hasFile('thumbnails')) {
            $thumbnail = $request->file('thumbnails');
            $thumbnailName = strtolower(trim($request->input('name'))) . '-thumb.' . $thumbnail->getClientOriginalExtension();
            $thumbnailPath = $thumbnail->storeAs('product_images/thumbnails', $thumbnailName, 'public');
            $data['thumbnails'] = $thumbnailPath;
        }

        // Log the complete product data before saving
        Log::info('Product Data before Save:', $data);

        // Create product record
        $product = Product::create($data);

        // Handle sizes and stock
        foreach ($request->input('sizes') as $sizeData) {
            $product->sizes()->create([
                'size' => $sizeData['size'],
                'stock' => $sizeData['stock']
            ]);
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function update(Request $request, $id)
    {

        Log::info('Request Data:', $request->all());
        $product = Product::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'price' => 'required|numeric',
            'original_price' => 'nullable|numeric',
            'discount_price' => 'nullable|numeric',
            'star_rating' => 'nullable|numeric|min:0|max:5',
            'sizes' => 'array',
            'sizes.*.size' => 'string', // Validation for each size
            'sizes.*.stock' => 'integer|min:0', // Validation for each stock
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:100000', // Primary image
            'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:100000', // Additional images
            'thumbnails' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:100000', // Thumbnail
        ]);


        // Handle primary image (image_path)
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($product->image_path && Storage::exists('public/' . $product->image_path)) {
                Storage::delete('public/' . $product->image_path);
            }
            $imageName = strtolower(trim($request->input('name'))) . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('product_images', $imageName, 'public');
            $validatedData['image_path'] = $imagePath; // Use the key 'image_path' for primary image
        }

        // Handle additional images
        if ($request->hasFile('additional_images')) {
            // Delete old additional images if they exist
            if ($product->images) {
                $oldImages = json_decode($product->images);
                foreach ($oldImages as $oldImage) {
                    if (Storage::exists('public/' . $oldImage)) {
                        Storage::delete('public/' . $oldImage);
                    }
                }
            }

            $additionalImagePaths = []; // Store additional images paths
            foreach ($request->file('additional_images') as $image) {
                $imageName = strtolower(trim($request->input('name'))) . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('product_images', $imageName, 'public');
                $additionalImagePaths[] = $imagePath; // Collect paths
            }
            $validatedData['images'] = json_encode($additionalImagePaths); // Store paths as JSON
        }

        // Handle thumbnail
        if ($request->hasFile('thumbnails')) {
            // Delete old thumbnail if it exists
            if ($product->thumbnails && Storage::exists('public/' . $product->thumbnails)) {
                Storage::delete('public/' . $product->thumbnails);
            }
            $thumbnailName = strtolower(trim($request->input('name'))) . '-thumb.' . $request->file('thumbnails')->getClientOriginalExtension();
            $thumbnailPath = $request->file('thumbnails')->storeAs('product_images/thumbnails', $thumbnailName, 'public');
            $validatedData['thumbnails'] = $thumbnailPath; // Assign the new thumbnail path
        }

        // Update the product with the validated data
        $product->update($validatedData);

        // Handle sizes
        $product->sizes()->delete(); // Remove old sizes
        foreach ($request->input('sizes') as $sizeData) {
            $product->sizes()->create([
                'size' => $sizeData['size'], // Access the size from the nested array
                'stock' => $sizeData['stock'], // Access the corresponding stock
            ]);
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }




    public function destroy(Product $product)
    {
        // Delete primary image if it exists
        if ($product->image_path && Storage::exists('public/' . $product->image_path)) {
            Storage::delete('public/' . $product->image_path);
        }

        // Delete additional images if they exist
        if ($product->images) {
            $imagePaths = json_decode($product->images);
            foreach ($imagePaths as $imagePath) {
                if (Storage::exists('public/' . $imagePath)) {
                    Storage::delete('public/' . $imagePath);
                }
            }
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
