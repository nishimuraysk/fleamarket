<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Purchase;
use Exception;

class PaymentController extends Controller
{
    public function create(Request $request, $item_id)
    {
        $data = $request->query();

        $item = Item::where('id', $item_id)->first();
        if (empty($item->sold)) {
            return view('payment', ['item' => $item, 'data' => $data]);
        } else {
            return redirect('/');
        }
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

        $user = auth()->user();
        $create_data = [
            'user_id' => $user->id,
            'item_id' =>  $item_id,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building' => $request->building,
        ];

        Purchase::create($create_data);

        $update_data = [
            'sold' => 1,
        ];

        Item::find($item_id)->update($update_data);
        return redirect('/thanks');
    }
}
