<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Playstation 5',
                'price' => '500 $',
                'description' => "The latest Sony PlayStation introduced in November 2020. Powered by an eight-core AMD Zen 2 CPU and custom AMD Radeon GPU.",
                'category'=> "Games",
                'gallery' => "https://www.ubuy.com.ni/productimg/?image=aHR0cHM6Ly9pNS53YWxtYXJ0aW1hZ2VzLmNvbS9hc3IvZjM3OWQ1Y2UtYjU4Yy00ZDdiLWE1ZDQtZWZjNmMyZmE1NzQ4LmNkYjIyZjljZGQ3NDQ1ZjZhOTAyNTcwMzhmYjdkNDBjLmpwZWc.jpg"
            ],

            [
                'name' => 'Xbox Series X',
                'price' => '400 $',
                'description' => "The Xbox Series X has higher-end hardware and supports higher display resolutions (up to 8K resolution), along with higher frame rates and real-time ray tracing.",
                'category'=> "Games",
                'gallery' => "https://i.blogs.es/70e7b9/captura-de-pantalla-2020-11-03-a-las-12.39.40/original.png"
            ],

            [
                'name' => 'Samsung Galaxy S22',
                'price' => '1000 $',
                'description' => "The Samsung Galaxy S22 specs are top-notch including a Snapdragon 8 Gen 1 chipset, 8GB RAM coupled with 128/256GB storage, and a 3700mAh battery with 25W charging speed.",
                'category'=> "Mobile",
                'gallery' => "https://i.blogs.es/717231/captura-de-pantalla-2022-02-09-a-las-15.29.17/450_1000.jpeg"
            ],

            [
                'name' => 'Lenovo Legion 5',
                'price' => '950 $',
                'description' => "Lenovo Legion 5 is a Windows 10 Home laptop with a 15.60-inch display that has a resolution of 1920x1080 pixels.",
                'category'=> "Computers",
                'gallery' => "https://www.notebookcheck.net/uploads/tx_nbc2/LenovoLegion5-17ACH6H__1__02.jpg"
            ],

            [
                'name' => 'Lenovo Ideapad 3',
                'price' => '650 $',
                'description' => "So when you come across a standout inexpensive laptop like the Lenovo IdeaPad 3 14, it's a welcome reprieve.",
                'category'=> "Computers",
                'gallery' => "https://www.notebookcheck.org/uploads/tx_nbc2/LenovoIdeaPad3-17__1__02.jpg"
            ]
        
        ]);
    }
}
