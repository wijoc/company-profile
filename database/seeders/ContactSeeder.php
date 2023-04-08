<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::insert([
            'phone' => '+62 8xxx 1x5x xxxx',
            'whatsapp' => '+62 8xxx 1x5x xxxx',
            'email' => 'default@landing.test',
            'address' => 'Lorem ipsum dolor sit amet.'
        ]);
    }
}
