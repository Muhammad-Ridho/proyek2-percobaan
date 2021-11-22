<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'    => 1,
            'nik'   => '1234567816273841',
            'name'  => 'admin',
            'email' => 'admin@gmail.com',
            'password'  => 'admin',
            'level' => 1,
            'remember_token'=> NULL,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ],
        [
            'id'    => 2,
            'nik'   => '9283546172813746',
            'name'  => 'user1',
            'email' => 'user@gmail.com',
            'password'  => 'user',
            'level' => 2,
            'remember_token'=> NULL,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);
    }
}
