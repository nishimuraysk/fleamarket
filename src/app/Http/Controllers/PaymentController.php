<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Purchase;
use Exception;

class PaymentController extends Controller
{
    public function create($item_id)
    {
        $item = Item::where('id', $item_id)->first();
        return view('payment', ['item' => $item]);
    }

    public function store(Request $request, $item_id)
    {
        $item = Item::where('id', $item_id)->first();
        $price = $item->price;

        \Stripe\Stripe::setApiKey(config('stripe.stripe_secret_key'));

        try {
            \Stripe\Charge::create([
                'source' => $request->stripeToken,
                'amount' => $price,
                'currency' => 'jpy',
            ]);
        } catch (Exception $e) {
            return back()->with('flash_alert', '決済に失敗しました(' . $e->getMessage() . ')');
        }

        $query = $request->query();
        $user = auth()->user();
        $create_data = [
            'user_id' => $user->id,
            'item_id' =>  $item_id,
            'payment' => $query['payment'],
            'postcode' => $query['postcode'],
            'address' => $query['address'],
            'building' => $query['building'],
        ];
        Purchase::create($create_data);
        return redirect('/thanks');
    }
}
