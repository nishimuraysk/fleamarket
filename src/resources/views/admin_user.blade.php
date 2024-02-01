@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin_user.css') }}">
@endsection

@section('content')
<div class="admin__container">
    <div class="admin__content-selected">
        <p class="admin-selected">ユーザー管理</p>
    </div>
    <div class="admin__content-unselected">
        <a class="admin-unselected" href="/admin/mail">メール送信 ＞</a>
    </div>
</div>
<div class="reservation__content">
    <h1 class="h1">ユーザー情報一覧</h1>
    <div class="table">
        <table class="table__inner">
            <tr class="table__row">
                <th class="table__header-id">id</th>
                <th class="table__header-name">name</th>
                <th class="table__header-delete">delete</th>
            </tr>
            @foreach ( $users as $user )
            <tr class="table__row">
                <td class="table__item">{{ $user['id'] }}</td>
                <td class="table__item">{{ $user['name'] }}</td>
                <td class="table__item">
                    <form action="/admin/user?id={{ $user['id'] }}" method="POST">
                        @csrf
                        <button>削除する</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection