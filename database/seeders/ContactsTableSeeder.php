<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'message' => 'This is a contact message.',
        ]);

        Contact::create([
            'name' => 'John Smith',
            'email' => 'johnsmith@example.com',
            'message' => 'This is another contact message.',
        ]);
    }
}
