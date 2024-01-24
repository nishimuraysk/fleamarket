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
    <form class="profile__form" action="/mypage/profile" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">プロフィール画像URL</span>
            </div>
            <div class="form__input--text">
                @if( !empty($user->image) )
                <input type="text" name="image" value="{{ $user->image }}" />
                @else
                <input type="text" name="image" id="image" value="{{ old('image') }}" />
                @endif
            </div>
            @error('image')
            <p class="error-message">{{$errors->first('image')}}</p>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">ユーザー名</span>
            </div>
            <div class="form__input--text">
                @if ($errors->any())
                <input type="text" name="name" value="{{ old('name') }}" />
                @else
                <input type="text" name="name" value="{{ $user->name }}" />
                @endif
            </div>
            @error('name')
            <p class="error-message">{{$errors->first('name')}}</p>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
            </div>
            <div class="form__input--text">
                @if( !empty($user->postcode) )
                <input type="text" name="postcode" value="{{ $user->postcode }}" />
                @else
                <input type="text" name="postcode" value="{{ old('postcode') }}" />
                @endif
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
                @if( !empty($user->address) )
                <input type="text" name="address" value="{{ $user->address }}" />
                @else
                <input type="text" name="address" value="{{ old('address') }}" />
                @endif
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
                @if( !empty($user->building) )
                <input type="text" name="building" value="{{ $user->building }}" />
                @else
                <input type="text" name="building" value="{{ old('building') }}" />
                @endif
            </div>
            @error('building')
            <p class="error-message">{{$errors->first('building')}}</p>
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection