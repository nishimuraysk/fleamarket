<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $role = User::where('id', $user->id)->first()->admin;

        if (empty($role)) {
            return redirect('/');
        } else {
            return redirect('/admin');
        }
    }
}
