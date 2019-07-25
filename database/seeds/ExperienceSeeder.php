<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experience')->insert([
            'position' => 'system administrator',
            'company' => 'ARDEKO',
            'years' => '2010-2013',
            'description' => Str::random(500),
        ]);
        DB::table('experience')->insert([
            'position' => 'system administrator',
            'company' => 'Okna Vida',
            'years' => '2010-2013',
            'description' => Str::random(500),
        ]);
    }
}
