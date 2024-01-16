@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="under-line">
    <div class="link__container">
        <div class="category">
            <p class="unselected__link">{{ $category['name'] }}商品一覧</p>
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