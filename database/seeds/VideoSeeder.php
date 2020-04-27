<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'video' => 'https://www.youtube.com/watch?v=JgHfx2v9zOU',
            'titre' => 'What our clients say',
        ]);
    }
}
