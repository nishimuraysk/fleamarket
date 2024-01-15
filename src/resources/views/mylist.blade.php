@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="under-line">
    <div class="link__container">
        <div class="recommend">
            <a class="unselected__link" href="/">おすすめ</a>
        </div>
        <div class="mylist">
            <a class="selected__link" href="/user/{{ $user['id'] }}">マイリスト</a>
        </div>
    </div>
</div>
<div class="item__content">
    @foreach ( $favorites as $favorite )
    <a class="item__link" href="/item/{{ $favorite['item']['id'] }}">
        <div class="item__container">
            <div class="item-img">
                <img class="img" src="{{ $favorite['item']['image'] }}">
                <div class="item-price">
                    ￥{{ $favorite['item']['price'] }}
                </div>
            </div>
            <div class="item-name">
                <p class="txt-limit">
                    {{ $favorite['item']['name'] }}
                </p>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection