<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name' => 'Gardening Water Spray',
            'product_description' => 'Very God Quality & Nice',
            'product_image' => '1658125968-plant.jpg',
            'product_price' => '100',
            'category_id' => '1',
        ]);
        Product::create([
            'product_name' => 'Gardening Water Spray',
            'product_description' => 'Very God Quality & Nice',
            'product_image' => '1658125968-plant.jpg',
            'product_price' => '100',
            'category_id' => '1',
        ]);

        Product::create([
            'product_name' => 'Gardening Water Spray',
            'product_description' => 'Very God Quality & Nice',
            'product_image' => '1658125968-plant.jpg',
            'product_price' => '100',
            'category_id' => 1,
        ]);

        Product::create([
            'product_name' => 'Flextools Gardening Trowel ',
            'product_description' => 'Very God Quality & Nice',
            'product_image' => '1658125947-hathim.jpg',
            'product_price' => '200',
            'category_id' => 2,
        ]);
        Product::create([
            'product_name' => 'Flextools Gardening Trowel ',
            'product_description' => 'Very God Quality & Nice',
            'product_image' => '1658125947-hathim.jpg',
            'product_price' => '200',
            'category_id' => 2,
        ]);
        Product::create([
            'product_name' => 'Flextools Gardening Trowel ',
            'product_description' => 'Very God Quality & Nice',
            'product_image' => '1658125947-hathim.jpg',
            'product_price' => '200',
            'category_id' => 2,
        ]);



        Product::create([
            'product_name' => 'Gardening Hand Gloves',
            'product_description' => 'Very God Quality & Nice',
            'product_image' => '1658125933-Flaower.jpg',
            'product_price' => '100',
            'category_id' => 3,
        ]);
        Product::create([
            'product_name' => 'Gardening Hand Gloves',
            'product_description' => 'Very God Quality & Nice',
            'product_image' => '1658125933-Flaower.jpg',
            'product_price' => '100',
            'category_id' => 3,
        ]);

        Product::create([
            'product_name' => 'Gardening Hand Gloves',
            'product_description' => 'Very God Quality & Nice',
            'product_image' => '1658125933-Flaower.jpg',
            'product_price' => '100',
            'category_id' => 3,
        ]);




    }
}
