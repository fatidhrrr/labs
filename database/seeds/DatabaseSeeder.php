<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LogoSeeder::class);
        $this->call(CarouselSeeder::class);
        $this->call(CardSeeder::class);
        $this->call(ParaSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(ContactusSeeder::class);
    }
}