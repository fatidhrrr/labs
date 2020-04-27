<?php

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => '001.jpg',
            'nom' => 'Michael Smith',
            'fonction' => 'CEO Company',
        ]);
        
        DB::table('testimonials')->insert([
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => '002.jpg',
            'nom' => 'Michael Smith',
            'fonction' => 'CEO Company',
        ]);

        DB::table('testimonials')->insert([
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => '003.jpg',
            'nom' => 'Michael Smith',
            'fonction' => 'CEO Company',
        ]);

        DB::table('testimonials')->insert([
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => '001.jpg',
            'nom' => 'Michael Smith',
            'fonction' => 'CEO Company',
        ]);

        DB::table('testimonials')->insert([
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => '002.jpg',
            'nom' => 'Michael Smith',
            'fonction' => 'CEO Company',
        ]);

        DB::table('testimonials')->insert([
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => '003.jpg',
            'nom' => 'Michael Smith',
            'fonction' => 'CEO Company',
        ]);

    }
}
