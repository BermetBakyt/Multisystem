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
                'name'=> 'Food Safety consultation',
                'price'=>'100',
                'description'=>"lorem lorem",
                'gallery'=> "hthttps://www.istockphoto.com/photo/technologist-expert-in-protective-uniform-with-hairnet-and-mask-taking-parameters-gm1161610414-318359788"
            ],
            [
                'name'=> 'Providing Training for employees',
                'price'=>'600',
                'description'=>"lorem lorem",
                'gallery'=> "https://www.istockphoto.com/photo/technologist-expert-in-protective-uniform-with-hairnet-and-mask-taking-parameters-gm1161610414-318359788"
            ],
            [
                'name'=> 'Proccessing consultation',
                'price'=>'150',
                'description'=>"lorem lorem",
                'gallery'=> "https://www.istockphoto.com/photo/technologist-expert-in-protective-uniform-with-hairnet-and-mask-taking-parameters-gm1161610414-318359788"
            ],
            [
                'name'=> 'Automation consultation',
                'price'=>'400',
                'description'=>"lorem lorem",
                'gallery'=> "https://www.istockphoto.com/photo/technologist-expert-in-protective-uniform-with-hairnet-and-mask-taking-parameters-gm1161610414-318359788"
            ],
        ]);
    }
}
