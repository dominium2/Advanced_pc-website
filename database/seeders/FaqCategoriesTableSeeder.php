<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqCategory;

class FaqCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FaqCategory::create([
            'name' => 'General',
        ]);

        FaqCategory::create([
            'name' => 'Technical',
        ]);
    }
}
