<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Favorite;
use App\Models\Comment;
use App\Models\Category;

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

    public function category($category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $items = Item::where('category_id', $category_id)->orderBy('created_at', 'desc')->get();
        return view('index', ['category' => $category, 'items' => $items]);
    }

    public function search(Request $request)
    {
        $user = auth()->user();
        $input_keyword = $request->keyword;
        $items = Item::KeywordSearch($input_keyword)->get();

        return view('index', ['user' => $user,  'items' => $items, 'input_keyword' => $input_keyword]);
    }

    public function detail($item_id)
    {
        $item = Item::with(['category', 'condition'])->where('id', $item_id)->first();
        $favorite_count = Favorite::where('item_id', $item_id)->count();
        $comment_count = Comment::where('item_id', $item_id)->count();

        $user = auth()->user();
        if (!empty($user)) {
            $favorite = Favorite::where('user_id', $user->id)->where('item_id', $item_id)->first();

            return view('item', ['item' => $item, 'favorite_count' => $favorite_count, 'comment_count' => $comment_count, 'favorite' => $favorite]);
        };

        return view('item', ['item' => $item, 'favorite_count' => $favorite_count, 'comment_count' => $comment_count]);
    }
}
