<?php

use Illuminate\Database\Seeder;

class Mapel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Mapel::insert([
            [
              'matkul'=>'Kehidupan'
               ],
            ]);
    }
}
