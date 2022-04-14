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

        for ($i=0; $i < 10; $i++) {
            DB::table('clients')->insert([
                'name' => Str::random(10),
                'address' => Str::random(10),
                'phoneNumber' =>Str::random(10) ,
            ]);
        }
    }
}
