@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="under-line">
    <div class="mypage__container">
        <div class="mypage-img__container">
            @if( !empty($user->image) )
            <img class="mypage-img" src="{{ $user['image'] }}">
            @else
            <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
            </svg>
            @endif
        </div>
        <div class="mypage-name">
            {{ $user['name'] }}
        </div>
        <button class="profile__button">
            <a class="profile__link" href="/mypage/profile">プロフィールを編集</a>
        </button>
    </div>
    <div class="link__container">
        <div class="sell">
            <a class="unselected__link" href="/mypage">出品した商品</a>
        </div>
        <div class="purchase">
            <a class="selected__link" href="/mypage/purchase">購入した商品</a>
        </div>
    </div>
</div>
<div class="item__content">
    @foreach ( $purchases as $purchase )
    <a class="item__link" href="/item/{{ $purchase['item']['id'] }}">
        <div class="item__container">
            <div class="item-img">
                <img class="img" src="{{ $purchase['item']['image'] }}">
                <div class="item-price">
                    ￥{{ number_format($purchase['item']['price']) }}
                </div>
            </div>
            <div class="item-name">
                <p class="txt-limit">
                    {{ $purchase['item']['name'] }}
                </p>
            </div>
        </div>
    </a>
    @endforeach
    @if (count($purchases) === 0)
    <div class="message__container">
        購入した商品はございません。
    </div>
    @endif
</div>
@endsection