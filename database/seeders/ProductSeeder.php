<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'sword',
                'description' => 'Melee weapon',
                'price' => '1',
                'amount' => '10',
                'category' => 'weapon',
            ],
            [
                'name' => 'shield',
                'description' => 'Protects you in battle',
                'price' => '2',
                'amount' => '10',
                'category' => 'armor',
            ],
            [
                'name' => 'potion',
                'description' => 'Restores health',
                'price' => '5',
                'amount' => '05',
                'category' => 'consumable',
            ],
            [
                'name' => 'bow',
                'description' => 'Ranged weapon',
                'price' => '3',
                'amount' => '10',
                'category' => 'weapon',
            ],
            [
                'name' => 'spell book',
                'description' => 'Contains powerful spells',
                'price' => '10',
                'amount' => '10',
                'category' => 'magic',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
