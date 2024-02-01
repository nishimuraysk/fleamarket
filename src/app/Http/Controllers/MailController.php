<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NoticeEmail;
use App\Models\User;

class MailController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $admin = $user->admin;

        if ($admin == 1) {
            return view('mail_send');
        } else {
            return redirect('/');
        }
    }

    public function send(Request $request)
    {
        $title = $request->title;
        $main = $request->main;

        $users = User::all();

        foreach ($users as $user) {
            $email = $user->email;
            $notice_email = new NoticeEmail($title, $main);
            Mail::to($email)
                ->send($notice_email);
        }

        return redirect()->back()->with('message', 'メールを送信しました');
    }
}
