<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'áo nam mùa xuân 1',
                'code'=>'02',
                'slug'=>'ao-nam-mua-dong',
                'price'=>'9000',
                'featured'=>'0',
                'state'=>'1',
                'info'=>'áo nam mùa đông lạnh run Chym thoan mat',
                'describer'=>'áo nam mùa hè thoan mat ca mua dong',
                'image'=>'jpg.jpg',
                'cat_id'=>'1'
            ],
            [
                'name'=>'áo nam mùa hạ 1',
                'code'=>'02',
                'slug'=>'ao-nam-mua-dong',
                'price'=>'9000',
                'featured'=>'0',
                'state'=>'1',
                'info'=>'áo nam mùa đông lạnh run Chym thoan mat',
                'describer'=>'áo nam mùa hè thoan mat ca mua dong',
                'image'=>'jpg.jpg',
                'cat_id'=>'1'
            ],
            [
                'name'=>'áo nam mùa xuân 12',
                'code'=>'02',
                'slug'=>'ao-nam-mua-dong',
                'price'=>'9000',
                'featured'=>'0',
                'state'=>'1',
                'info'=>'áo nam mùa đông lạnh run Chym thoan mat',
                'describer'=>'áo nam mùa hè thoan mat ca mua dong',
                'image'=>'jpg.jpg',
                'cat_id'=>'1'
            ],
            [
                'name'=>'áo nam mùa hạ 12',
                'code'=>'02',
                'slug'=>'ao-nam-mua-dong',
                'price'=>'9000',
                'featured'=>'0',
                'state'=>'1',
                'info'=>'áo nam mùa đông lạnh run Chym thoan mat',
                'describer'=>'áo nam mùa hè thoan mat ca mua dong',
                'image'=>'jpg.jpg',
                'cat_id'=>'1'
            ],
        ]);
    }
}
