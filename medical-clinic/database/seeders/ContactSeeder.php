<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            ['type' => 'customer_service', 'value' => '+123456789'],
            ['type' => 'website', 'value' => 'https://example.com'],
            ['type' => 'whatsapp', 'value' => 'https://wa.me/123456789'],
            ['type' => 'facebook', 'value' => 'https://facebook.com/example'],
            ['type' => 'instagram', 'value' => 'https://instagram.com/example'],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
