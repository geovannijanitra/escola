<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            [
              'email'  => 'admin@gmail.com',
              'password' => bcrypt('admin'),
              'level' => 'admin',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
               ],
            ]);
    }
}
