<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cruds')->insert([
            'name'=>Str::random(5),
            'email'=>Str::random(5).'gmail.com',
            'phone'=>Str::random(11)
        ]);
    }
}
