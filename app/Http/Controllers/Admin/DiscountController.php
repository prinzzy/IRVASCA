<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::all();
        return view('admin.discounts.index', compact('discounts'));
    }

    public function create()
    {
        return view('admin.discounts.create');
    }

    public function store(Request $request)
    {
        Log::info('Request data:', $request->all());
        $request->validate([
            'code' => 'required|unique:discounts,code',
            'discount_percentage' => 'required|numeric|min:0|max:100',
            'expiration_date' => 'required|date|after:today',
            'status' => 'required|string|in:Active,Inactive', // Updated to match DB
        ]);
        Log::info('Validation passed.');

        // Create the discount, ensuring the status is properly capitalized
        Discount::create($request->all());

        Log::info('Discount created successfully.');

        return redirect()->route('discounts.index')->with('success', 'Discount created successfully');
    }

    public function edit(Discount $discount)
    {
        return view('admin.discounts.edit', compact('discount'));
    }

    public function update(Request $request, Discount $discount)
    {
        $request->validate([
            'code' => 'required|unique:discounts,code,' . $discount->id,
            'discount_percentage' => 'required|numeric|min:0|max:100',
            'expiration_date' => 'required|date|after:today',
            'status' => 'required|string|in:Active,Inactive', // Updated to match DB
        ]);

        $discount->update($request->only([
            'code',
            'discount_percentage',
            'expiration_date',
            'status',
        ]));

        Log::info('Discount updated successfully.');

        return redirect()->route('discounts.index')->with('success', 'Discount updated successfully');
    }

    public function destroy(Discount $discount)
    {
        $discount->delete();

        return redirect()->route('discounts.index')->with('success', 'Discount deleted successfully');
    }
}