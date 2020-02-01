<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('password'),
            ]);
        }
        for ($i=0; $i < 9; $i++) {
            DB::table('items')->insert([
                'name' => Str::random(10),
                'description' => Str::random(10).'@gmail.com',
                'user_id' => rand(1,10),
            ]);
        }
    }
}
