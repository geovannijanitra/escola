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
        $this->call(User::class);
        $this->call(Mapel::class);
        $this->call(Gurumapel::class);
        $this->call(Siswa::class);
    }
}
