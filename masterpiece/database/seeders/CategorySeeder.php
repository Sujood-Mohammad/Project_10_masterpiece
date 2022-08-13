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
            'name' => 'Gardening Tools',
            'description' => 'Very God Quality & Nice',
            'image' => '1658125968-plant.jpg',
        ]);
        Category::create([
            'name' => 'Agricultural ',
            'description' => 'Very God Quality & Nice',
            'image' => '1658125947-hathim.jpg',
        ]);
        Category::create([
            'name' => 'Plant Seedlings',
            'description' => 'Very God Quality & Nice',
            'image' => '1658125933-Flaower.jpg',
        ]);
    }
}
