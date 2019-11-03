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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' =>'Mahmud Mahadi',
            'email' =>'mahdihasansagor@gmail.com',
            'password' => bcrypt('153-15-587chudirvai'),
        ]);
    }
}
