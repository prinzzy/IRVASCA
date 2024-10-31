<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function showAddressModal(Request $request)
    {
        $user = auth()->user();
        $addresses = Address::where('user_id', $user->id)->get();

        return response()->json(['addresses' => $addresses]);
    }

    public function storeAddress(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $address = new Address($validatedData);
        $address->user_id = auth()->id();
        $address->save();

        return response()->json(['success' => true, 'message' => 'Address saved successfully']);
    }
}
