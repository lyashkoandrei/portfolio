<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'name' => 'Andrei',
            'surname' => 'Lyashko',
            'tel' => '950956526',
            'email' => 'lyashkoandrei@gmail.com',
            'address' => 'Ukraine, Dnipro',
            'linkedin' => 'LInkedIN',
            'github' => 'GitHub',
            'twitter' => 'Twitter',
            'facebook' => 'Facebook',
            'stackoverflow'=> 'stackoverflow',
            'color' => '#0AB1C1',
            'description' => Str::random(500),
        ]);
    }
}
