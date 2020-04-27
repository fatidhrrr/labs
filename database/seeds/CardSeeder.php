<?php

use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'icone' => 'flaticon-023-flask',
            'titre' => 'Get in the lab',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-011-compass',
            'titre' => 'Projects online',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-037-idea',
            'titre' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);
        
        DB::table('cards')->insert([
            'icone' => 'flaticon-042-typography',
            'titre' => 'Get in the lab',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-035-smartphone',
            'titre' => 'Projects online',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-050-satellite',
            'titre' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-047-artificial-intelligence',
            'titre' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-013-puzzle',
            'titre' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-003-energy-drink',
            'titre' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-026-search',
            'titre' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-012-cube',
            'titre' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-049-projector',
            'titre' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-046-laptop',
            'titre' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);

        DB::table('cards')->insert([
            'icone' => 'flaticon-032-explorer',
            'titre' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
            elementum id, suscipit id nulla..',
        ]);
    }
    
}