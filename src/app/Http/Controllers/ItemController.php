<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Favorite;

class ItemController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $items = Item::orderBy('created_at', 'desc')->get();
        return view('index', ['user' => $user, 'items' => $items]);
    }

    public function mylist($user_id)
    {
        $user = auth()->user();
        $favorites = Favorite::with('item')->where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        return view('mylist', ['user' => $user,  'favorites' => $favorites]);
    }

    public function search(Request $request)
    {
        $user = auth()->user();
        $input_keyword = $request->keyword;
        $items = Item::KeywordSearch($input_keyword)->get();

        return view('index', ['user' => $user,  'items' => $items, 'input_keyword' => $input_keyword]);
    }
}
