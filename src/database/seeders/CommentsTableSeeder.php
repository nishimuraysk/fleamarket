<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => 1,
            'item_id' => 1,
            'comment' => 'コミュニケーションも円滑で発送までのスピードが早かったです！また、商品の状態も良く、機会があればまた利用したいと思います。ありがとうございました！',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('comments')->insert($param);
    }
}
