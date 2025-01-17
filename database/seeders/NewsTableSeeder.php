<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => 'First News',
            'content' => 'This is the content of the first news.',
            'published_at' => now(),
        ]);

        News::create([
            'title' => 'Second News',
            'content' => 'This is the content of the second news.',
            'published_at' => now(),
        ]);
    }
}
