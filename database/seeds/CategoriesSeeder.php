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
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet aperiam at consequatur, distinctio dolor doloribus earum enim fuga harum id ipsam iure, labore libero magni nam natus neque nihil nobis officia quibusdam repellendus saepe sapiente sit unde ut voluptate. Autem corporis illum nihil non sit ut, vitae! Modi natus praesentium quam. Consectetur deleniti dolorum eos facilis id libero magnam minus, necessitatibus quia sed? At aut ipsam libero praesentium? Asperiores cupiditate debitis officiis omnis perferendis porro quae quia quisquam sequi vel, vitae voluptatum. Animi, commodi deleniti facilis impedit maiores tempora ullam voluptate. Accusamus deleniti doloribus libero provident quos reprehenderit, ullam!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Smartphone',
                'category_id' => null,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet aperiam at consequatur, distinctio dolor doloribus earum enim fuga harum id ipsam iure, labore libero magni nam natus neque nihil nobis officia quibusdam repellendus saepe sapiente sit unde ut voluptate. Autem corporis illum nihil non sit ut, vitae! Modi natus praesentium quam. Consectetur deleniti dolorum eos facilis id libero magnam minus, necessitatibus quia sed? At aut ipsam libero praesentium? Asperiores cupiditate debitis officiis omnis perferendis porro quae quia quisquam sequi vel, vitae voluptatum. Animi, commodi deleniti facilis impedit maiores tempora ullam voluptate. Accusamus deleniti doloribus libero provident quos reprehenderit, ullam!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Lenovo',
                'category_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet aperiam at consequatur, distinctio dolor doloribus earum enim fuga harum id ipsam iure, labore libero magni nam natus neque nihil nobis officia quibusdam repellendus saepe sapiente sit unde ut voluptate. Autem corporis illum nihil non sit ut, vitae! Modi natus praesentium quam. Consectetur deleniti dolorum eos facilis id libero magnam minus, necessitatibus quia sed? At aut ipsam libero praesentium? Asperiores cupiditate debitis officiis omnis perferendis porro quae quia quisquam sequi vel, vitae voluptatum. Animi, commodi deleniti facilis impedit maiores tempora ullam voluptate. Accusamus deleniti doloribus libero provident quos reprehenderit, ullam!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Asus',
                'category_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet aperiam at consequatur, distinctio dolor doloribus earum enim fuga harum id ipsam iure, labore libero magni nam natus neque nihil nobis officia quibusdam repellendus saepe sapiente sit unde ut voluptate. Autem corporis illum nihil non sit ut, vitae! Modi natus praesentium quam. Consectetur deleniti dolorum eos facilis id libero magnam minus, necessitatibus quia sed? At aut ipsam libero praesentium? Asperiores cupiditate debitis officiis omnis perferendis porro quae quia quisquam sequi vel, vitae voluptatum. Animi, commodi deleniti facilis impedit maiores tempora ullam voluptate. Accusamus deleniti doloribus libero provident quos reprehenderit, ullam!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Meizu',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet aperiam at consequatur, distinctio dolor doloribus earum enim fuga harum id ipsam iure, labore libero magni nam natus neque nihil nobis officia quibusdam repellendus saepe sapiente sit unde ut voluptate. Autem corporis illum nihil non sit ut, vitae! Modi natus praesentium quam. Consectetur deleniti dolorum eos facilis id libero magnam minus, necessitatibus quia sed? At aut ipsam libero praesentium? Asperiores cupiditate debitis officiis omnis perferendis porro quae quia quisquam sequi vel, vitae voluptatum. Animi, commodi deleniti facilis impedit maiores tempora ullam voluptate. Accusamus deleniti doloribus libero provident quos reprehenderit, ullam!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'IPhone',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet aperiam at consequatur, distinctio dolor doloribus earum enim fuga harum id ipsam iure, labore libero magni nam natus neque nihil nobis officia quibusdam repellendus saepe sapiente sit unde ut voluptate. Autem corporis illum nihil non sit ut, vitae! Modi natus praesentium quam. Consectetur deleniti dolorum eos facilis id libero magnam minus, necessitatibus quia sed? At aut ipsam libero praesentium? Asperiores cupiditate debitis officiis omnis perferendis porro quae quia quisquam sequi vel, vitae voluptatum. Animi, commodi deleniti facilis impedit maiores tempora ullam voluptate. Accusamus deleniti doloribus libero provident quos reprehenderit, ullam!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Samsung',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet aperiam at consequatur, distinctio dolor doloribus earum enim fuga harum id ipsam iure, labore libero magni nam natus neque nihil nobis officia quibusdam repellendus saepe sapiente sit unde ut voluptate. Autem corporis illum nihil non sit ut, vitae! Modi natus praesentium quam. Consectetur deleniti dolorum eos facilis id libero magnam minus, necessitatibus quia sed? At aut ipsam libero praesentium? Asperiores cupiditate debitis officiis omnis perferendis porro quae quia quisquam sequi vel, vitae voluptatum. Animi, commodi deleniti facilis impedit maiores tempora ullam voluptate. Accusamus deleniti doloribus libero provident quos reprehenderit, ullam!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
