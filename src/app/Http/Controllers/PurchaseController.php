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
        $create_data = [
            'user_id' => $user->id,
            'item_id' =>  $item_id,
            'payment' => $request->payment,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building' => $request->building,
        ];
        if ($request->payment == '1') {
            return redirect("/payment/create/$item_id?payment=$payment&postcode=$postcode&address=$address&building=$building");
        } else {
            Purchase::create($create_data);

            $update_data = [
                'sold' => 1,
            ];

            Item::find($item_id)->update($update_data);
            return redirect('/thanks');
        }
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
