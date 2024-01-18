<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Purchase;

class MypageController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $items = Item::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        $purchases = Purchase::with('item')->where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('mypage', ['user' => $user, 'items' => $items, 'purchases' => $purchases]);
    }
}
