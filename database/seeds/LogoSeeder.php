<?php

use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logos')->insert([
            'photo' => 'big-logo.png',
            'text' => 'Get your freebie template now!',
        ]);

    }
}
