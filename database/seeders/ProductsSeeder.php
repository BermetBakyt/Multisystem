<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
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
                'name'=> 'Nokia',
                'price'=>'50',
                'category'=> "mobile",
                'description'=>"A smartshone with 2gb ram and other cool features",
                'gallery'=> "https://unsplash.com/photos/F5V6d7nPsLQ"
            ],
            [
                'name'=> 'Panasonic',
                'price'=>'600',
                'category'=> "mobile",
                'description'=>"A smartphone with cool features",
                'gallery'=> "https://unsplash.com/photos/F5V6d7nPsLQ"
            ],
            [
                'name'=> 'LG',
                'price'=>'100',
                'category'=> "tv",
                'description'=>"A TV with 4gb ram and other cool features",
                'gallery'=> "https://www.lg.com/us/images/cell-phones/md07518564/gallery/zoom-01.jpg"
            ],
            [
                'name'=> 'SMEG',
                'price'=>'1000',
                'category'=> "refrigerator",
                'description'=>"A refrigerator with  cool features",
                'gallery'=> "https://images.unsplash.com/photo-1631459191844-db2af67b8a17?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
            ],
            [
                'name'=> 'Iphone',
                'price'=>'1400',
                'category'=> "mobile",
                'description'=>"A smartshone with cool features",
                'gallery'=> "https://images.unsplash.com/photo-1653921167679-7676ed531a58?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80"
            ],
        ]);
    }
}
