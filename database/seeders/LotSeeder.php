<?php

namespace Database\Seeders;

use App\Models\Lot;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(20)->create();

        Lot::factory(20)->create()->each(function($lot) {
            $categories = Category::inRandomOrder()->take(rand(1, 10))->pluck('id');
            $lot->categories()->attach($categories);
        });
    }
}