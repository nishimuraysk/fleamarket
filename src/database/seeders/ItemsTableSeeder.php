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
            'category_id' => 1,
            'condition_id' => 1,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/ec4b470e-c1c3-40ee-a578-82ae2b2d80e1',
            'name' => '遠藤航選手のリバプール公式ユニフォーム',
            'description' => 'イングランドプレミアリーグに所属するリバプールの公式ユニフォームです。日本代表のキャプテンである遠藤選手の背番号と名前が入っています。オンラインショップで購入しましたが、サイズが合わなかったので出品しています。',
            'price' => 15000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('items')->insert($param);
    }
}
