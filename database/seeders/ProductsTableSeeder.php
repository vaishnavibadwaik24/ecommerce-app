<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $categories = $categories->pluck('id', 'name');

        $products = [
            [
                'title' => 'Grapes',
                'description' => '<p>A <strong>grape</strong> is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus.</p>',
                'category_id' => $categories['Fruits'],
                'photo' => '1716884807.jpg',
                'status' => '1',
                'price' => '35',
                'quantity' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Orange',
                'description' => '<p><i><strong>Orange</strong></i> Group, one of the world\'s leading telecommunications and digital service provider.</p>',
                'category_id' => $categories['Fruits'],
                'photo' => '1717053181.jpg',
                'status' => '1',
                'price' => '45',
                'quantity' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Banana',
                'description' => '<p>A <i><strong>banana</strong></i> is the common name for a type of fruit and also the name for the herbaceous plants.</p>',
                'category_id' => $categories['Fruits'],
                'photo' => '1717053240.jpg',
                'status' => '1',
                'price' => '30',
                'quantity' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Raspberry',
                'description' => '<p>The <i><strong>raspberry</strong></i> is the edible fruit of a multitude of plant species in the genus Rubus, Rose family.</p>',
                'category_id' => $categories['Fruits'],
                'photo' => '1717053318.jpg',
                'status' => '1',
                'price' => '85',
                'quantity' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Apricot',
                'description' => '<p>An <i><strong>apricot</strong></i> is a fruit, or the tree that bears the fruit, of several species in the genus Prunus.&nbsp;</p>',
                'category_id' => $categories['Fruits'],
                'photo' => '1717053393.jpg',
                'status' => '1',
                'price' => '60',
                'quantity' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tomato',
                'description' => '<p>The <i><strong>tomato</strong></i> is the edible berry of the plant Solanum lycopersicum, commonly known as the <i><strong>tomato</strong></i></p>',
                'category_id' => $categories['Vegetables'],
                'photo' => '1717053461.jpg',
                'status' => '1',
                'price' => '30',
                'quantity' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Potato',
                'description' => '<p>The <i><strong>potato</strong></i> is a starchy root vegetable native to the Americas that is consumed as a staple&nbsp;</p>',
                'category_id' => $categories['Vegetables'],
                'photo' => '1717054057.jpg',
                'status' => '1',
                'price' => '35',
                'quantity' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Broccoli',
                'description' => '<p><i><strong>Broccoli</strong></i>, a nutrient-rich vegetable, boasts high levels of vitamins, minerals, and antioxidants, promoting overall health.</p>',
                'category_id' => $categories['Vegetables'],
                'photo' => '1718205171.jpg',
                'status' => '1',
                'price' => '80',
                'quantity' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bell Pepper',
                'description' => '<p><i><strong>Peppers</strong></i> are native to Mexico, Central America, the Caribbean and northern South America.</p>',
                'category_id' => $categories['Vegetables'],
                'photo' => '1718205418.jpg',
                'status' => '1',
                'price' => '50',
                'quantity' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Parsley',
                'description' => '<p><i><strong>Parsley</strong></i>, a vibrant herb, enhances dishes with its fresh flavor, rich nutrients, and versatile culinary applications.</p><p>&nbsp;</p><p>&nbsp;</p>',
                'category_id' => $categories['Vegetables'],
                'photo' => '1718205553.jpg',
                'status' => '1',
                'price' => '20',
                'quantity' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Apple',
                'description' => '<p><strong>Apples</strong>, available in numerous varieties, are delicious, nutritious fruits high in fiber, vitamins, and antioxidants.</p>',
                'category_id' => $categories['Fruits'],
                'photo' => '1718207763.jpg',
                'status' => '1',
                'price' => '50',
                'quantity' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Product::insert($products);
    }
}
