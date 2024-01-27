@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="message__container">
    <div class="done-message">
        ご購入ありがとうございました。
    </div>
    <div class="mypage-link__container">
        <a href="/mypage" class="mypage-link">マイページへ戻る</a>
    </div>
</div>
@endsection