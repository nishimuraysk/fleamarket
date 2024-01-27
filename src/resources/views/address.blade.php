@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('content')
<div class="purchase__content">
    <div class="purchase-form__heading">
        <h2>配送先の変更</h2>
    </div>
    <form class="purchase__form" action="/purchase/address/{{ $item['id'] }}" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
            </div>
            <div class="form__input--text">
                <input type="text" name="postcode" />
            </div>
            @error('postcode')
            <p class="error-message">{{$errors->first('postcode')}}</p>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
            </div>
            <div class="form__input--text">
                <input type="text" name="address" />
            </div>
            @error('address')
            <p class="error-message">{{$errors->first('address')}}</p>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__input--text">
                <input type="text" name="building" />
            </div>
            @error('building')
            <p class="error-message">{{$errors->first('building')}}</p>
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">変更する</button>
        </div>
    </form>
</div>
@endsection