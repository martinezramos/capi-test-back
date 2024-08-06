<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Contact;
use App\Models\Email;
use App\Models\Phone;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Contact::factory()->count(5000)->create()->each(function ($contact){
            Phone::factory()->count(1)->create([
                'contact_id' => $contact?->id,
            ]);

            Address::factory()->count(1)->create([
                'contact_id' => $contact?->id,
            ]);

            Email::factory()->count(1)->create([
                'contact_id' => $contact?->id,
            ]);
        });
    }
}
