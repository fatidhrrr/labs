<?php

use Illuminate\Database\Seeder;

class ParaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paras')->insert([
            'titre' => 'Get in the Lab and discover the world',

            'description1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum
            id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue.
            Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor
            porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.',

            'description2' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel
            suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum.
            Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros
            dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.',
        ]);
    }
}
