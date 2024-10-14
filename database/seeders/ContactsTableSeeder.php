<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'address' => '123 Main St, Tashkent',
                'phone_number' => '+998901234567',
                'telegram' => '@example_telegram',
                'instagram' => '@example_instagram',
                'facebook' => 'https://facebook.com/example',
                'youtube' => 'https://youtube.com/example',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
