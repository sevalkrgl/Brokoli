<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class Urun extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=0;$i<=100;$i++){
            DB::table('urun')->insert([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>md5('102030'),
                'age'=>rand(18,60),
                'gender'=>rand(0,1)

            ]);
        }
    }
}
