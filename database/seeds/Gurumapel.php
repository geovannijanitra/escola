<?php

use Illuminate\Database\Seeder;

class Gurumapel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Gurumapel::insert([
            [
                
                'user_id'=>'1',
                'mapel_id'=>1,
              'nama'=>'Azam', 
              'notelp'=>'0888888888', 
              'tempat'=>'Madiun',
              'tgllahir'=>'2000-01-01'
               ],
            ]);
    }
}
