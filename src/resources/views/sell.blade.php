@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="action_message--container">
    @if(session('message'))
    <div class="action_message">
        {{ session('message') }}
    </div>
    @endif
</div>
<div class="profile__content">
    <div class="profile-form__heading">
        <h2>商品の出品</h2>
    </div>
    <form class="profile__form" action="/sell" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品画像URL</span>
            </div>
            <div class="form__input--text">
                <input type="text" name="image" id="image" value="{{ old('image') }}" />
            </div>
            @error('image')
            <p class="error-message">{{$errors->first('image')}}</p>
            @enderror
        </div>
        <div class="sell-title">商品の詳細</div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">カテゴリ</span>
            </div>
            <div class="form__input--text">
                <select name="category_id" id="category_id" value="{{ old('category_id') }}">
                    <option value="" selected disabled style='display:none;'></option>
                    @foreach ( $categories as $category )
                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                    @endforeach
                </select>
            </div>
            @error('category_id')
            <p class="error-message">{{$errors->first('category_id')}}</p>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品の状態</span>
            </div>
            <div class="form__input--text">
                <select name="condition_id" id="condition_id">
                    <option value="" selected disabled style='display:none;'></option>
                    @foreach ( $conditions as $condition )
                    <option value="{{ $condition['id'] }}">{{ $condition['condition'] }}</option>
                    @endforeach
                </select>
            </div>
            @error('condition_id')
            <p class="error-message">{{$errors->first('condition_id')}}</p>
            @enderror
        </div>
        <div class="sell-title">商品名と説明</div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品名</span>
            </div>
            <div class="form__input--text">
                <input type="text" name="name" id="name" value="{{ old('name') }}" />
            </div>
            @error('name')
            <p class="error-message">{{$errors->first('name')}}</p>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品の説明</span>
            </div>
            <div class="form__input--textarea">
                <textarea name="description" id="description" value="{{ old('description') }}" maxlength="255"></textarea>
            </div>
            @error('description')
            <p class="error-message">{{$errors->first('description')}}</p>
            @enderror
        </div>
        <div class="sell-title">販売価格</div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">販売価格</span>
            </div>
            <div class="form__input--text">
                <input type="number" name="price" id="price" value="{{ old('price') }}" />
            </div>
            @error('price')
            <p class="error-message">{{$errors->first('price')}}</p>
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">出品する</button>
        </div>
    </form>
</div>
@endsection