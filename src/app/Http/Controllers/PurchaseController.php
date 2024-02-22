<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\AddressRequest;

class PurchaseController extends Controller
{
    public function index($item_id)
    {
        $user = auth()->user();
        $item = Item::where('id', $item_id)->first();
        if (empty($item->sold)) {
            return view('purchase', ['user' => $user, 'item' => $item]);
        } else {
            return redirect('/');
        }
    }

    public function action(AddressRequest $request, $item_id)
    {
        $payment = $request->payment;
        $postcode = $request->postcode;
        $address = $request->address;
        $building = $request->building;

        $user = auth()->user();

        return redirect("/payment/create/$item_id?payment=$payment&postcode=$postcode&address=$address&building=$building");
    }

    public function address($item_id)
    {
        $item = Item::where('id', $item_id)->first();
        if (empty($item->sold)) {
            return view('address', ['item' => $item]);
        } else {
            return redirect('/');
        }
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
