@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
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
        <h2>プロフィール設定</h2>
    </div>
    <form class="profile__form" action="/mypage/profile" method=" post">
        @csrf
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
            <label class="profile__button">
                <input type="file" class="input-image" name="image" id="image">画像を選択する
                <!-- <a name="image" class="profile__link" href="/mypage/profile">画像を選択する</a> -->
            </label>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">ユーザー名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="{{ $user['name'] }}" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    @if( !empty($user->postcode) )
                    <input type="text" name="postcode" placeholder="{{ $user['postcode'] }}" value="{{ old('postcode') }}" />
                    @else
                    <input type="text" name="postcode" value="{{ old('postcode') }}" />
                    @endif
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    @if( !empty($user->address) )
                    <input type="text" name="address" placeholder="{{ $user['address'] }}" value="{{ old('address') }}" />
                    @else
                    <input type="text" name="address" value="{{ old('address') }}" />
                    @endif
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    @if( !empty($user->building) )
                    <input type="text" name="building" placeholder="{{ $user['building'] }}" value="{{ old('building') }}" />
                    @else
                    <input type="text" name="building" value="{{ old('building') }}" />
                    @endif
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection