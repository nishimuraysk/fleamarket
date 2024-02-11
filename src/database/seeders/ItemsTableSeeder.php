<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 1,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/ec4b470e-c1c3-40ee-a578-82ae2b2d80e1',
            'name' => '遠藤航選手のリバプール公式ユニフォーム',
            'description' => 'イングランドプレミアリーグに所属するリバプールの公式ユニフォームです。日本代表のキャプテンである遠藤選手の背番号と名前が入っています。オンラインショップで購入しましたが、サイズが合わなかったので出品しています。',
            'price' => 15000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 2,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/ccc9bd04-9790-4dc1-813e-e847e53cd5c3',
            'name' => ' 冨安健洋選手のアーセナル公式ユニフォーム',
            'description' => 'イングランドプレミアリーグに所属するアーセナルの公式ユニフォームです。日本代表の主軸である冨安選手の背番号と名前が入っています。転勤により現地へ応援に行けなくなったので出品しています。',
            'price' => 12000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 3,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/b9def984-fe17-4554-b154-7c9ee6bc7286',
            'name' => '久保建英選手のレアルソシエダ公式ユニフォーム',
            'description' => 'レアルソシエダの公式ユニフォームです。最近の活躍ぶりが目覚ましい久保選手の背番号と名前が入っています。何度か現地での応援の際に着用しましたが、サイズが合わなくなったので出品しています。',
            'price' => 10000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 2,
            'condition_id' => 4,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/05816402-afae-4842-9ee2-7f65480ff216',
            'name' => '大谷翔平選手の公式グッズ！現地でしか販売していない期間限定商品なのでお早めに！',
            'description' => 'メジャーリーグで活躍を続ける大谷翔平選手の公式グッズです。現地でしか販売していない期間限定品と聞いて購入しましたが、特に使い道がなかったので出品しています。大谷選手ファンの方にぜひお譲りしたいです。',
            'price' => 7500,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 5,
            'condition_id' => 5,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/f3c03ac7-904e-4bba-a1f1-c0291e7e8628',
            'name' => '【美品】リバプール パーカー FIFA サッカー プレミアリーグ',
            'description' => 'イングランドプレミアリーグに所属するリバプールのパーカーです。アンフィールドにある公式ショップで購入しましたが、保管状態が悪かったのか購入時から状態が良くなかったです。ショップでは返品不可とのことだったので、こちらで値段を下げて出品しています。',
            'price' => 5000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 3,
            'condition_id' => 1,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/5f12abff-07d8-4db7-af05-726e19baa55a',
            'name' => 'NBA公式グッズ',
            'description' => 'NBAの公式グッズです。バスケットボールが好きな友人からお土産にもらったのですが、NBAに詳しくないので押し入れにしまったままになっていました。限定品なのでNBAが好きな人に持ってもらった方が良いと思い出品しています。',
            'price' => 15000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 1,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/ec4b470e-c1c3-40ee-a578-82ae2b2d80e1',
            'name' => '遠藤航選手のリバプール公式ユニフォーム',
            'description' => 'イングランドプレミアリーグに所属するリバプールの公式ユニフォームです。日本代表のキャプテンである遠藤選手の背番号と名前が入っています。オンラインショップで購入しましたが、サイズが合わなかったので出品しています。',
            'price' => 15000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 2,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/ccc9bd04-9790-4dc1-813e-e847e53cd5c3',
            'name' => ' 冨安健洋選手のアーセナル公式ユニフォーム',
            'description' => 'イングランドプレミアリーグに所属するアーセナルの公式ユニフォームです。日本代表の主軸である冨安選手の背番号と名前が入っています。転勤により現地へ応援に行けなくなったので出品しています。',
            'price' => 12000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 3,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/b9def984-fe17-4554-b154-7c9ee6bc7286',
            'name' => '久保建英選手のレアルソシエダ公式ユニフォーム',
            'description' => 'レアルソシエダの公式ユニフォームです。最近の活躍ぶりが目覚ましい久保選手の背番号と名前が入っています。何度か現地での応援の際に着用しましたが、サイズが合わなくなったので出品しています。',
            'price' => 10000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 2,
            'condition_id' => 4,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/05816402-afae-4842-9ee2-7f65480ff216',
            'name' => '大谷翔平選手の公式グッズ！現地でしか販売していない期間限定商品なのでお早めに！',
            'description' => 'メジャーリーグで活躍を続ける大谷翔平選手の公式グッズです。現地でしか販売していない期間限定品と聞いて購入しましたが、特に使い道がなかったので出品しています。大谷選手ファンの方にぜひお譲りしたいです。',
            'price' => 7500,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 5,
            'condition_id' => 5,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/f3c03ac7-904e-4bba-a1f1-c0291e7e8628',
            'name' => '【美品】リバプール パーカー FIFA サッカー プレミアリーグ',
            'description' => 'イングランドプレミアリーグに所属するリバプールのパーカーです。アンフィールドにある公式ショップで購入しましたが、保管状態が悪かったのか購入時から状態が良くなかったです。ショップでは返品不可とのことだったので、こちらで値段を下げて出品しています。',
            'price' => 5000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 3,
            'condition_id' => 1,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/5f12abff-07d8-4db7-af05-726e19baa55a',
            'name' => 'NBA公式グッズ',
            'description' => 'NBAの公式グッズです。バスケットボールが好きな友人からお土産にもらったのですが、NBAに詳しくないので押し入れにしまったままになっていました。限定品なのでNBAが好きな人に持ってもらった方が良いと思い出品しています。',
            'price' => 15000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 1,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/ec4b470e-c1c3-40ee-a578-82ae2b2d80e1',
            'name' => '遠藤航選手のリバプール公式ユニフォーム',
            'description' => 'イングランドプレミアリーグに所属するリバプールの公式ユニフォームです。日本代表のキャプテンである遠藤選手の背番号と名前が入っています。オンラインショップで購入しましたが、サイズが合わなかったので出品しています。',
            'price' => 15000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 2,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/ccc9bd04-9790-4dc1-813e-e847e53cd5c3',
            'name' => ' 冨安健洋選手のアーセナル公式ユニフォーム',
            'description' => 'イングランドプレミアリーグに所属するアーセナルの公式ユニフォームです。日本代表の主軸である冨安選手の背番号と名前が入っています。転勤により現地へ応援に行けなくなったので出品しています。',
            'price' => 12000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 3,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/b9def984-fe17-4554-b154-7c9ee6bc7286',
            'name' => '久保建英選手のレアルソシエダ公式ユニフォーム',
            'description' => 'レアルソシエダの公式ユニフォームです。最近の活躍ぶりが目覚ましい久保選手の背番号と名前が入っています。何度か現地での応援の際に着用しましたが、サイズが合わなくなったので出品しています。',
            'price' => 10000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 2,
            'condition_id' => 4,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/05816402-afae-4842-9ee2-7f65480ff216',
            'name' => '大谷翔平選手の公式グッズ！現地でしか販売していない期間限定商品なのでお早めに！',
            'description' => 'メジャーリーグで活躍を続ける大谷翔平選手の公式グッズです。現地でしか販売していない期間限定品と聞いて購入しましたが、特に使い道がなかったので出品しています。大谷選手ファンの方にぜひお譲りしたいです。',
            'price' => 7500,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 5,
            'condition_id' => 5,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/f3c03ac7-904e-4bba-a1f1-c0291e7e8628',
            'name' => '【美品】リバプール パーカー FIFA サッカー プレミアリーグ',
            'description' => 'イングランドプレミアリーグに所属するリバプールのパーカーです。アンフィールドにある公式ショップで購入しましたが、保管状態が悪かったのか購入時から状態が良くなかったです。ショップでは返品不可とのことだったので、こちらで値段を下げて出品しています。',
            'price' => 5000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 3,
            'condition_id' => 1,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/5f12abff-07d8-4db7-af05-726e19baa55a',
            'name' => 'NBA公式グッズ',
            'description' => 'NBAの公式グッズです。バスケットボールが好きな友人からお土産にもらったのですが、NBAに詳しくないので押し入れにしまったままになっていました。限定品なのでNBAが好きな人に持ってもらった方が良いと思い出品しています。',
            'price' => 15000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 1,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/ec4b470e-c1c3-40ee-a578-82ae2b2d80e1',
            'name' => '遠藤航選手のリバプール公式ユニフォーム',
            'description' => 'イングランドプレミアリーグに所属するリバプールの公式ユニフォームです。日本代表のキャプテンである遠藤選手の背番号と名前が入っています。オンラインショップで購入しましたが、サイズが合わなかったので出品しています。',
            'price' => 15000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 2,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/ccc9bd04-9790-4dc1-813e-e847e53cd5c3',
            'name' => ' 冨安健洋選手のアーセナル公式ユニフォーム',
            'description' => 'イングランドプレミアリーグに所属するアーセナルの公式ユニフォームです。日本代表の主軸である冨安選手の背番号と名前が入っています。転勤により現地へ応援に行けなくなったので出品しています。',
            'price' => 12000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 4,
            'condition_id' => 3,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/b9def984-fe17-4554-b154-7c9ee6bc7286',
            'name' => '久保建英選手のレアルソシエダ公式ユニフォーム',
            'description' => 'レアルソシエダの公式ユニフォームです。最近の活躍ぶりが目覚ましい久保選手の背番号と名前が入っています。何度か現地での応援の際に着用しましたが、サイズが合わなくなったので出品しています。',
            'price' => 10000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 2,
            'condition_id' => 4,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/05816402-afae-4842-9ee2-7f65480ff216',
            'name' => '大谷翔平選手の公式グッズ！現地でしか販売していない期間限定商品なのでお早めに！',
            'description' => 'メジャーリーグで活躍を続ける大谷翔平選手の公式グッズです。現地でしか販売していない期間限定品と聞いて購入しましたが、特に使い道がなかったので出品しています。大谷選手ファンの方にぜひお譲りしたいです。',
            'price' => 7500,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 5,
            'condition_id' => 5,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/f3c03ac7-904e-4bba-a1f1-c0291e7e8628',
            'name' => '【美品】リバプール パーカー FIFA サッカー プレミアリーグ',
            'description' => 'イングランドプレミアリーグに所属するリバプールのパーカーです。アンフィールドにある公式ショップで購入しましたが、保管状態が悪かったのか購入時から状態が良くなかったです。ショップでは返品不可とのことだったので、こちらで値段を下げて出品しています。',
            'price' => 5000,
            'sold' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'category_id' => 3,
            'condition_id' => 1,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/5f12abff-07d8-4db7-af05-726e19baa55a',
            'name' => 'NBA公式グッズ',
            'description' => 'NBAの公式グッズです。バスケットボールが好きな友人からお土産にもらったのですが、NBAに詳しくないので押し入れにしまったままになっていました。限定品なのでNBAが好きな人に持ってもらった方が良いと思い出品しています。',
            'price' => 15000,
            'sold' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);
    }
}
