<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 3; $i++) {
            DB::table('summa_departament')->insert([
                'departament_oper_id' => '22',
                'summa' => Integer::random(10),
                // 'phoneNumber' =>Str::random(10) ,
            ]);
        }
    }
}
