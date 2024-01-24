<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Condition;
use App\Models\Item;
use App\Http\Requests\SellRequest;

class SellController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $categories = Category::all();
        $conditions = Condition::all();
        return view('sell', ['user' => $user,  'categories' => $categories, 'conditions' => $conditions]);
    }

    public function create(SellRequest $request)
    {
        $user = auth()->user();
        $create_data = [
            'user_id' => $user->id,
            'category_id' => $request->category_id,
            'condition_id' => $request->condition_id,
            'image' => $request->image,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ];

        Item::create($create_data);
        return redirect()->back()->with('message', '商品を出品しました');
    }
}
