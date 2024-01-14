@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="under-line">
    <div class="link__container">
        <div class="recommend">
            <a class="recommend__link" href="/">おすすめ</a>
        </div>
        <div class="mylist">
            <a class="mylist__link" href="/user">マイリスト</a>
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
</div>
@endsection