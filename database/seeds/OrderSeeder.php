<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'fullname'=>'chu van huy',
                'address'=>'Hung yen',
                'email'=>'vanhuy@gmail.com',
                'phone'=>'0371975858',
                'total'=>'3',
                'state'=>'5000',
            ],
            [
                'fullname'=>'Chu van hoang',
                'address'=>'ha noi',
                'email'=>'vanhoang@gmail.com',
                'phone'=>'0359555',
                'total'=>'2',
                'state'=>'1000',
            ],
            [
                'fullname'=>'Hoang Van Cong',
                'address'=>'ha noi',
                'email'=>'vanhoang@gmail.com',
                'phone'=>'0359555',
                'total'=>'3',
                'state'=>'2000',
            ],
            [
                'fullname'=>'Dan chi binh',
                'address'=>'ha noi',
                'email'=>'chibinh@gmail.com',
                'phone'=>'035945858',
                'total'=>'7',
                'state'=>'7000',
            ],
        ]);
    }
}
