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
        factory(\App\Team::class, 5)->create()->each(function ($team) {
            $team->players()->saveMany(factory(\App\Player::class, 5)->make());
        });;
//         $this->call(TeamsTableSeeder::class);
//         $this->call(PlayersTableSeeder::class);
    }
}
