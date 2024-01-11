# coachtechフリマサービス

# アプリケーション名
coachtechフリマサービス
ある企業が開発した独自のフリマアプリ

◾️おすすめ商品一覧ページ（/）

Githubの画像URL


## 作成した目的

制作の背景と目的：coachtechブランドのアイテムを出品する

制作の目標：初年度でのユーザー数1000人達成

## アプリケーションURL

デプロイURL：未定

http://localhost/

## 他のリポジトリ

GithubのURL

## 機能一覧
- 会員登録
- ログイン
- ログアウト
- 商品一覧取得
- 商品詳細取得
- ユーザ商品お気に入り一覧取得
- ユーザ情報取得
- ユーザ購入商品一覧取得
- ユーザ出品商品一覧取得
- プロフィール変更
- 商品お気に入り追加
- 商品お気に入り削除
- 商品コメント追加
- 商品コメント削除
- 出品
- 購入
- 配送先変更

## 使用技術（実行環境）
- Laravel 10.31.0

## テーブル設計

◾️スプレッドシート

https://docs.google.com/spreadsheets/d/1z_4AVKl72FAMUXmwfpkTUVhkkbqYOt0MMNAwRvAXK7A/edit?pli=1#gid=1188247583

◾️画像


## ER図

◾️スプレッドシート

https://docs.google.com/spreadsheets/d/1z_4AVKl72FAMUXmwfpkTUVhkkbqYOt0MMNAwRvAXK7A/edit?pli=1#gid=1419563855

◾️画像


# 環境構築
ターミナルでgit cloneして作成されたフォルダに移動して、下記の作業及びコマンドを実行してください。

・.env.exampleを.envにリネームして、DBの設定を行ってください
・DBはMySQLを使っているのでMySQLにDBを作ってください
・アプリケーションキーの初期化を行ってください

```
docker-compose up -d --build
docker-compose exec php bash
composer create-project "laravel/laravel=10.*" . --prefer-dist
php artisan migrate
php artisan db:seed
composer require laravel/fortify
php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
php artisan migrate
```

## 他に記載することがあれば記述する

◾️データベースについては以下をご確認ください

http://localhost:8080/

◾️メールの送信結果については以下をご確認ください

http://localhost:8025/

◾️テスト用のユーザーデータは以下のファイルにあるのでログイン時に活用ください。

UsersTableSeeder.php
