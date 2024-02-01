@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="under-line">
    <div class="link__container">
        <div class="recommend">
            <a class="unselected__link" href="/">おすすめ</a>
        </div>
        <div class="mylist">
            <a class="unselected__link" href="/user/{{ $user['id'] }}">マイリスト</a>
        </div>
        <div class="admin">
            <a class="selected__link" href="/admin">管理画面</a>
        </div>
    </div>
</div>
<div class="admin__container">
    <a class="link" href="/admin/user">ユーザーを削除する ＞</a>
</div>
<div class="admin__container">
    <a class="link" href="/admin/mail">メールを送信する ＞</a>
</div>
@endsection