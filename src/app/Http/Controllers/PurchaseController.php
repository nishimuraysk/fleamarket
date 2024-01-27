<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Purchase;
use App\Http\Requests\AddressRequest;

class PurchaseController extends Controller
{
    public function index($item_id)
    {
        $user = auth()->user();
        $item = Item::where('id', $item_id)->first();
        return view('purchase', ['user' => $user, 'item' => $item]);
    }

    public function action(Request $request, $item_id)
    {
        $user = auth()->user();
        $create_data = [
            'user_id' => $user->id,
            'item_id' =>  $item_id,
            'payment' => $request->payment,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building' => $request->building,
        ];

        Purchase::create($create_data);
        return redirect('/thanks');
    }

    public function address($item_id)
    {
        $item = Item::where('id', $item_id)->first();
        return view('address', ['item' => $item]);
    }

    public function update(AddressRequest $request, $item_id)
    {
        $item = Item::where('id', $item_id)->first();
        $postcode = $request->postcode;
        $address = $request->address;
        $building = $request->building;

        return view('purchase', ['item' => $item, 'postcode' => $postcode, 'address' => $address, 'building' => $building]);
    }
}
