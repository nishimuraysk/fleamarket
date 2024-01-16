@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="under-line">
    <div class="link__container">
        <div class="recommend">
            <a class="selected__link" href="/">おすすめ</a>
        </div>
        @if ( !empty($user) )
        <div class="mylist">
            <a class="unselected__link" href="/user/{{ $user['id'] }}">マイリスト</a>
        </div>
        @endif
    </div>
</div>
<div class="item__content">
    @foreach ( $items as $item )
    <a class="item__link" href="/item/{{ $item['id'] }}">
        <div class="item__container">
            <div class="item-img">
                <img class="img" src="{{ $item['image'] }}">
                <div class="item-price">
                    ￥{{ $item['price'] }}
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
    @if (count($items) === 0)
    <div class="message__container">
        検索条件に該当する商品情報はございません。
    </div>
    @endif
</div>
@endsection