@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="link__container">
    <a class="link" href="/admin/user">ユーザーを削除する ＞</a>
</div>
<div class="link__container">
    <a class="link" href="/admin/mail">メールを送信する ＞</a>
</div>
@endsection