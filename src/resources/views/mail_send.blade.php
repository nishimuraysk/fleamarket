@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mail_send.css') }}">
@endsection

@section('content')
<div class="action_message--container">
    @if(session('message'))
    <div class="action_message">
        {{ session('message') }}
    </div>
    @endif
</div>
<div class="admin__container">
    <div class="admin__content-unselected">
        <a class="admin-unselected" href="/admin/user">ユーザー管理 ＞</a>
    </div>
    <div class="admin__content-selected">
        <p class="admin-selected">メール送信</p>
    </div>
</div>
<div class="input__content">
    <form action="/admin/mail" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="h1">メール内容</h1>
        <p class="mail__message">※登録されている全てのユーザーに送信されます</p>
        <div class="input__container">
            <label for="title" class="input-label">件名</label>
            <input type="text" class="input-text" name="title" id="title" placeholder="件名を入力してください。" required>
        </div>
        <div class="input__container">
            <label for="main" class="input-label">本文</label>
            <textarea name="main" id="main" class="input-summary" placeholder="メールの本文を入力してください。" required></textarea>
        </div>
        <div class="input-button__container">
            <button class="input-button">メールを送信する</button>
        </div>
    </form>
</div>
@endsection