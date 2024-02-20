<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Purchase;
use App\Models\User;
use App\Http\Requests\MypageRequest;
use Illuminate\Support\Facades\Storage;

class MypageController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $items = Item::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('mypage', ['user' => $user, 'items' => $items]);
    }

    public function purchase()
    {
        $user = auth()->user();
        $purchases = Purchase::with('item')->where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('mypage_purchase', ['user' => $user, 'purchases' => $purchases]);
    }

    public function profile()
    {
        $user = auth()->user();
        return view('profile', ['user' => $user]);
    }

    public function update(MypageRequest $request)
    {
        $user = auth()->user();

        if (!empty($request->image)) {
            $image = $request->file('image');
            $path = Storage::disk('s3')->put('/', $image, 'public');
            $file = Storage::url($path);

            $update_data = [
                'name' => $request->name,
                'image' => $file,
                'postcode' => $request->postcode,
                'address' => $request->address,
                'building' => $request->building,
            ];
        } else {
            $update_data = [
                'name' => $request->name,
                'postcode' => $request->postcode,
                'address' => $request->address,
                'building' => $request->building,
            ];
        }

        User::find($user->id)->update($update_data);
        return redirect()->back()->with('message', 'プロフィールを変更しました');
    }
}
