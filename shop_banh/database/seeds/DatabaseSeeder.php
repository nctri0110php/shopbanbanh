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
        DB::table('admins')->insert([
            'name' => 'tri2',
            'email' => 'tri2@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
