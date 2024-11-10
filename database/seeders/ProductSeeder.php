<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product 1',
            'price' => rand(100, 900),
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'image_one' => '/storage/products/2-1.jpg',
            'image_two' => '/storage/products/2-2.jpg',
            'image_three' => '/storage/products/2-3.jpg',
            'image_four' => '/storage/products/2-4.jpg',
        ]);

        Product::create([
            'name' => 'Product 2',
            'price' => rand(100, 900),
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'image_one' => '/storage/products/3-1.jpg',
            'image_two' => '/storage/products/2-2.jpg',
            'image_three' => '/storage/products/2-3.jpg',
            'image_four' => '/storage/products/2-4.jpg',
        ]);

        Product::create([
            'name' => 'Product 3',
            'price' => rand(100, 900),
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'image_one' => '/storage/products/2-4.jpg',
            'image_two' => '/storage/products/2-2.jpg',
            'image_three' => '/storage/products/2-3.jpg',
            'image_four' => '/storage/products/2-4.jpg',
        ]);

        Product::create([
            'name' => 'Product 4',
            'price' => rand(100, 900),
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'image_one' => '/storage/products/3-2.jpg',
            'image_two' => '/storage/products/2-2.jpg',
            'image_three' => '/storage/products/2-3.jpg',
            'image_four' => '/storage/products/2-4.jpg',
        ]);

        Product::create([
            'name' => 'Product 5',
            'price' => rand(100, 900),
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'image_one' => '/storage/products/2-3.jpg',
            'image_two' => '/storage/products/3-1.jpg',
            'image_three' => '/storage/products/3-3.jpg',
            'image_four' => '/storage/products/2-6.jpg',
        ]);

        Product::create([
            'name' => 'Product 6',
            'price' => rand(100, 900),
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'image_one' => '/storage/products/3-4.jpg',
            'image_two' => '/storage/products/3-1.jpg',
            'image_three' => '/storage/products/3-3.jpg',
            'image_four' => '/storage/products/2-6.jpg',
        ]);
    }
}
