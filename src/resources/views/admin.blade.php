@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin">
    <div class="admin__heading">
        <h2>管理画面</h2>
    </div>
    <div class="admin__container">
        <a class="link" href="/admin/user">ユーザーを削除する ＞</a>
    </div>
    <div class="admin__container">
        <a class="link" href="/admin/mail">メールを送信する ＞</a>
    </div>
</div>
@endsection