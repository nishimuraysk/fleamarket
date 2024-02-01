<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if ($user->admin == 1) {
            return view('admin', ['user' => $user]);
        } else {
            return redirect('/');
        }
    }

    public function user()
    {
        $user = auth()->user();
        $users = User::all();
        if ($user->admin == 1) {
            return view('admin_user', ['users' => $users]);
        } else {
            return redirect('/');
        }
    }

    public function delete(Request $request)
    {
        User::where('id', $request->id)->delete();

        return redirect()->back();
    }
}
