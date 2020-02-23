<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Laptop',
                'category_id' => null,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quos!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Smartphone',
                'category_id' => null,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quos!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Lenovo',
                'category_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quos!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Asus',
                'category_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quos!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Meizu',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quos!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'IPhone',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quos!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Samsung',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quos!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
