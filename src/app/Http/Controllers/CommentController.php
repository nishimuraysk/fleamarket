<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Favorite;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function index($item_id)
    {
        $item = Item::with(['category', 'condition'])->where('id', $item_id)->first();
        $favorite_count = Favorite::where('item_id', $item_id)->count();
        $comment_count = Comment::where('item_id', $item_id)->count();
        $comments = Comment::with('user')->where('item_id', $item_id)->get();

        $user = auth()->user();
        if (!empty($user)) {
            $favorite = Favorite::where('user_id', $user->id)->where('item_id', $item_id)->first();

            return view('comment', ['item' => $item, 'favorite_count' => $favorite_count, 'comment_count' => $comment_count, 'favorite' => $favorite, 'comments' => $comments, 'user' => $user]);
        };

        return view('comment', ['item' => $item, 'favorite_count' => $favorite_count, 'comment_count' => $comment_count, 'comments' => $comments]);
    }

    public function create(CommentRequest $request)
    {
        $user = auth()->user();
        $create_data = [
            'user_id' => $user->id,
            'item_id' => $request->id,
            'comment' => $request->comment,
        ];

        Comment::create($create_data);

        return redirect()->back();
    }

    public function delete(Request $request)
    {
        Comment::where('id', $request->id)->delete();

        return redirect()->back();
    }
}
