<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_detail')->insert([
            [
                'name'=>'ao nam sinh vien',
                'code'=>'AS',
                'price'=>'5000',
                'quantity'=>'5',
                'image'=>'ao-so-mi-trang-kem-asm836-81935533903301.jpg',
                'ord_id'=>'1'
            ],
            [
                'name'=>'ao nam sinh vien 1',
                'code'=>'AM',
                'price'=>'6000',
                'quantity'=>'2',
                'image'=>'ao-so-mi-hoa-tiet-den-asm1223-101916415600787.jpg',
                'ord_id'=>'1'
            ],
            [
                'name'=>'ao nam sinh vien 2',
                'code'=>'QA',
                'price'=>'6000',
                'quantity'=>'1',
                'image'=>'ao-so-mi-ca-ro-xam-xanh-asm1228-101994139939106.jpg',
                'ord_id'=>'1'
            ],
            [
                'name'=>'ao nam sinh vien 3',
                'code'=>'QA',
                'price'=>'7000',
                'quantity'=>'9',
                'image'=>'ao-khoac.jpg',
                'ord_id'=>'1'
            ],
            [
                'name'=>'ao nam sinh vien 4',
                'code'=>'AS',
                'price'=>'5000',
                'quantity'=>'5',
                'image'=>'ao.jpg',
                'ord_id'=>'2'
            ],
            [
                'name'=>'ao nam sinh vien 5',
                'code'=>'AM',
                'price'=>'6000',
                'quantity'=>'2',
                'image'=>'aomi.jpg',
                'ord_id'=>'2'
            ],
            [
                'name'=>'ao nam sinh vien 6',
                'code'=>'QA',
                'price'=>'6000',
                'quantity'=>'1',
                'image'=>'quanau.jpg',
                'ord_id'=>'2'
            ],
            [
                'name'=>'ao nam sinh vien 7',
                'code'=>'QA',
                'price'=>'7000',
                'quantity'=>'9',
                'image'=>'aoquan.jpg',
                'ord_id'=>'2'
            ],
            [
                'name'=>'ao nam sinh vien 8',
                'code'=>'AS',
                'price'=>'5000',
                'quantity'=>'5',
                'image'=>'ao.jpg',
                'ord_id'=>'3'
            ],
            [
                'name'=>'ao nam sinh vien 9',
                'code'=>'AM',
                'price'=>'6000',
                'quantity'=>'2',
                'image'=>'aomi.jpg',
                'ord_id'=>'3'
            ],
            [
                'name'=>'ao nam sinh vien 10',
                'code'=>'QA',
                'price'=>'6000',
                'quantity'=>'1',
                'image'=>'quanau.jpg',
                'ord_id'=>'3'
            ],
            [
                'name'=>'ao nam sinh vien 11',
                'code'=>'QA',
                'price'=>'7000',
                'quantity'=>'9',
                'image'=>'aoquan.jpg',
                'ord_id'=>'4'
            ],
        ]);
    }
}
