@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="purchase__content">
    <div class="purchase-form__heading">
        <h2>購入内容のご確認</h2>
    </div>
    <form class="purchase__form" action="/purchase/{{ $item['id'] }}" method="post">
        @csrf
        <div class="purchase-title">商品情報</div>
        <div class="item-information">
            <div class="image__container">
                <img src="{{ $item['image'] }}" class="image">
            </div>
            <div class="item-title">
                {{ $item['name'] }}
            </div>
        </div>
        <div class="form__group">
            <div class="purchase-title">お支払い金額</div>
            <div class="form__input--text">
                <div class="price__form">￥{{ number_format($item->price) }}</div>
            </div>
        </div>
        <div class="form__group">
            <div class="purchase-title">お支払い方法</div>
            <div class="form__input--text">
                <select name="payment" id="payment" value="{{ old('payment') }}">
                    <option value="クレジットカード" selected>クレジットカード</option>
                    <option value="コンビニ">コンビニ</option>
                    <option value="銀行振込">銀行振込</option>
                </select>
            </div>
        </div>
        <div class="form__group">
            <div class="purchase-title">
                配送先
                <div class="address-change-link__container">
                    <a href="/purchase/address/{{$item['id']}}" class="address-change-link">変更する</a>
                </div>
            </div>
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
            </div>
            <div class="form__input--text">
                @if( !empty($postcode) )
                <input type="text" name="postcode" value="{{ $postcode }}" readonly />
                @else
                <input type="text" name="postcode" value="{{ $user->postcode }}" readonly />
                @endif
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
            </div>
            <div class="form__input--text">
                @if( !empty($address) )
                <input type="text" name="address" value="{{ $address }}" readonly />
                @else
                <input type="text" name="address" value="{{ $user->address }}" readonly />
                @endif
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__input--text">
                @if( !empty($building) )
                <input type="text" name="building" value="{{ $building }}" readonly />
                @else
                <input type="text" name="building" value="{{ $user->building }}" readonly />
                @endif
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">購入する</button>
        </div>
    </form>
</div>
@endsection