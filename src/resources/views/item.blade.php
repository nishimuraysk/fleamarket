@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="under-line">
    <div class="link__container">
        <div class="detail">
            <a class="selected__link" href="/item/{{ $item['id'] }}">商品説明</a>
        </div>
        <div class="comment">
            <a class="unselected__link" href="/comment/{{ $item['id'] }}">コメント</a>
        </div>
    </div>
</div>
<div class="main__container">
    <div class="image__container">
        <img class="img" src="{{ $item['image'] }}">
    </div>
    <div class="info__container">
        <div class="item-name">
            {{ $item['name'] }}
        </div>
        <div class="item-price">
            ￥{{ number_format($item['price']) }}
        </div>
        <div class="icon__container">
            <div class="icon__content">
                @if( empty($favorite) )
                <form action="/favorite?id={{ $item['id'] }}" method="POST">
                    @csrf
                    <button class="icon__link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="24" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                        </svg>
                    </button>
                </form>
                @else
                <form action="/favorite/delete?id={{ $item['id'] }}" method="POST">
                    @csrf
                    <button class="icon__link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="24" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                    </button>
                </form>
                @endif
                <div class="icon__count">
                    {{ $favorite_count }}
                </div>
            </div>
            <div class="icon__content">
                <a class="icon__link" href="/comment/{{ $item['id'] }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z" />
                    </svg>
                </a>
                <div class="icon__count">
                    {{ $comment_count }}
                </div>
            </div>
        </div>
        @if ( empty($item['sold']) )
        <div class="button__container">
            <a class="button__link" href="/purchase/{{ $item['id'] }}">
                <button class="button">
                    購入する
                </button>
            </a>
        </div>
        @else
        <div class="button__container">
            <div class="sold_out">完売しました</div>
        </div>
        @endif
        <div class="item-heading">
            商品説明
        </div>
        <div class="item-description">
            {{ $item['description'] }}
        </div>
        <div class="item-heading">
            商品の情報
        </div>
        <div class="category__container">
            <div class="category-title">
                カテゴリ
            </div>
            <div class="category-item">
                <a class="category__link" href="/category/{{ $item['category']['id'] }}">{{ $item['category']['name'] }}</a>
            </div>
        </div>
        <div class="status__container">
            <div class="status-title">
                商品の状態
            </div>
            <div class="status-item">
                {{ $item['condition']['condition'] }}
            </div>
        </div>
    </div>
</div>
@endsection