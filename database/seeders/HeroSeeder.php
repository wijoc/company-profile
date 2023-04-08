<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Hero::insert([
            'app' => 'ForTest',
            'banner' => 'Your best friend who will provide solutions for your digital needs.'
        ]);
    }
}
