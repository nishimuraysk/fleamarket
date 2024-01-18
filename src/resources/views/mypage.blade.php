@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="under-line">
    <div class="mypage__container">
        <div class="mypage-img__container">
            <img class="mypage-img" src="{{ $user['image'] }}">
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
            <a class="selected__link" href="/mypage">出品した商品</a>
        </div>
        <div class="purchase">
            <a class="unselected__link" href="/mypage/purchase">購入した商品</a>
        </div>
    </div>
</div>
<div class="item__content">
    @foreach ( $items as $item )
    <a class="item__link" href="/item/{{ $item['id'] }}">
        <div class="item__container">
            <div class="item-img">
                <img class="img" src="{{ $item['image'] }}">
                <div class="item-price">
                    ￥{{ number_format($item['price']) }}
                </div>
            </div>
            <div class="item-name">
                <p class="txt-limit">
                    {{ $item['name'] }}
                </p>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection