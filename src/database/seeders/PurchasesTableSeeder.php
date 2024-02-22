<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => 1,
            'item_id' => 24,
            'postcode' => '154-0004',
            'address' => '東京都世田谷区太子堂1-5-13',
            'building' => 'マンション三軒茶屋202',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('purchases')->insert($param);
    }
}
