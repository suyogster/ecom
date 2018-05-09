<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://www.gundrukpost.com/wp-content/uploads/2015/03/1PalpasaCafe.jpg',
                'title' => 'Palpasa',
        'description' => 'This is a description',
        'price' => 150

        ]);
        $product ->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.gundrukpost.com/wp-content/uploads/2015/03/1PalpasaCafe.jpg',
            'title' => 'Palpasa',
            'description' => 'This is a description',
            'price' => 150

        ]);
        $product ->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.gundrukpost.com/wp-content/uploads/2015/03/1PalpasaCafe.jpg',
            'title' => 'Palpasa',
            'description' => 'This is a description',
            'price' => 150

        ]);
        $product ->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.gundrukpost.com/wp-content/uploads/2015/03/1PalpasaCafe.jpg',
            'title' => 'Palpasa',
            'description' => 'This is a description',
            'price' => 150

        ]);
        $product ->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.gundrukpost.com/wp-content/uploads/2015/03/1PalpasaCafe.jpg',
            'title' => 'Palpasa',
            'description' => 'This is a description',
            'price' => 150

        ]);
        $product ->save();
    }
}
