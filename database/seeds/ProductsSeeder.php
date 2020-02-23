<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name' => 'Asus ROG Strix',
                'category_id' => 4,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 22999,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Lenovo IdeaPad 330-15AST',
                'category_id' => 3,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 5699,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Asus X509FL-BQ053',
                'category_id' => 4,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 15999,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Asus Laptop 15 M509DL-BQ025',
                'category_id' => 4,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 16999,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Lenovo IdeaPad S145-14IWL',
                'category_id' => 3,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 7099,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Lenovo IdeaPad 330-15IKBR',
                'category_id' => 3,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 11499,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Apple iPhone 11 64GB Yellow',
                'category_id' => 6,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 22999,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'iPhone 8 64GB Red',
                'category_id' => 6,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 12977,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Apple iPhone Xs Max 64GB Silver',
                'category_id' => 6,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 22999,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Meizu X8 6/128GB Black',
                'category_id' => 5,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 4799,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Meizu C9 Pro 3/32GB Black',
                'category_id' => 5,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 1999,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Meizu M10 3/32GB Black',
                'category_id' => 5,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 3499,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Samsung Galaxy M10 2/16GB Ocean Blue',
                'category_id' => 7,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 2944,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Samsung Galaxy A50 6/128GB Black',
                'category_id' => 7,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 8279,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Samsung Galaxy S10e 6/128 GB Yellow',
                'category_id' => 7,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 18049,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'iPhone 6s 32gb Space Gray',
                'category_id' => 6,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 8700,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Lenovo IdeaPad S340-15API',
                'category_id' => 3,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 11599,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Asus ROG Zephyrus S GX502GV-AZ058T',
                'category_id' => 4,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 8700,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Meizu Pro 7 4/64GB Global Red',
                'category_id' => 5,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 6899,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Samsung Galaxy Note 10 Lite',
                'category_id' => 7,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 15999,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Samsung Galaxy S20 Ultra 12/128GB Cosmic Black',
                'category_id' => 7,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis harum inventore non nostrum quae quo rerum soluta unde vel! Accusamus aliquam animi assumenda atque consequuntur corporis culpa dolore enim et eum eveniet ex excepturi explicabo facere fugiat iure iusto labore laboriosam libero nam obcaecati officiis pariatur provident quam, quas quis quos rem, repudiandae saepe sequi soluta suscipit tempora tempore temporibus ullam ut vero. Eum sint, vel! Ab accusamus accusantium ad aliquid assumenda autem dignissimos esse ex exercitationem explicabo facilis fugit id itaque iusto odit perspiciatis porro, praesentium quibusdam quidem quis quisquam rem rerum sunt tempore temporibus veritatis voluptatum. Nesciunt!',
                'price' => 37999,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
