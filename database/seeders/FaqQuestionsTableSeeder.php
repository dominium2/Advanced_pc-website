<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqCategory;
use App\Models\FaqQuestion;

class FaqQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generalCategory = FaqCategory::where('name', 'General')->first();
        $technicalCategory = FaqCategory::where('name', 'Technical')->first();

        FaqQuestion::create([
            'category_id' => $generalCategory->id,
            'question' => 'What is your return policy?',
            'answer' => 'Our return policy is 30 days.',
        ]);

        FaqQuestion::create([
            'category_id' => $technicalCategory->id,
            'question' => 'How do I reset my password?',
            'answer' => 'You can reset your password by clicking on the "Forgot Password" link on the login page.',
        ]);
    }
}
