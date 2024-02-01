<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => 'テスト利用者',
            'email' => 'test01@email.com',
            'password' => bcrypt('test_01'),
            'admin' => null,
            'image' => 'https://github.com/nishimuraysk/fleamarket/assets/140567528/6cc1a64b-a295-41e9-99f3-9ec363a0003b',
            'postcode' => '154-0004',
            'address' => '東京都世田谷区太子堂1-5-13',
            'building' => 'マンション三軒茶屋202',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'テスト管理者',
            'email' => 'test02@email.com',
            'password' => bcrypt('test_02'),
            'admin' => 1,
            'image' => null,
            'postcode' => null,
            'address' => null,
            'building' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->insert($param);
    }
}
