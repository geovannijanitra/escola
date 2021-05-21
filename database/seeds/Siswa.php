<?php

use Illuminate\Database\Seeder;

class Siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Siswa::insert([
            [
                'user_id'=>'1',
              'nama'=>'Murid Azam', 
              'alamat'=>'Madiun', 
              'tempat'=>'Madiun',
              'tgllahir'=>'2000-01-01',
              'kelamin'=>'Pria',
              'kelas'=>'4'
               ],
            ]);
    }
}