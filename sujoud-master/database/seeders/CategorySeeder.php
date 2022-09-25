<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Gardening Tools && Accessories',
            'description' => 'Very God Quality & Nice',
            'image' => '1658125968-plant.jpg',
        ]);
        Category::create([
            'name' => 'Agricultural Machinery && Equipment',
            'description' => 'Very God Quality & Nice',
            'image' => '1658125947-hathim.jpg',
        ]);
        Category::create([
            'name' => 'Plant Seedlings - Aromatics',
            'description' => 'Very God Quality & Nice',
            'image' => '1664019954-Plant seedlings - aromatics.jpg',
        ]);

        Category::create([
            'name' => 'Ornamental Trees',
            'description' => 'Very God Quality & Nice',
            'image' => '1664020079-Ornamental Trees.jpg',
        ]);

        Category::create([
            'name' => 'Seedlings - Tropical Fruits',
            'description' => 'Very God Quality & Nice',
            'image' => '1664019659-Seedlings - Tropical Fruits.jpg',
        ]);

        Category::create([
            'name' => ' Organic Fertilizers',
            'description' => 'Very God Quality & Nice',
            'image' => '1664020524-Organic Fertilizers.jpg',
        ]);

    }
}
