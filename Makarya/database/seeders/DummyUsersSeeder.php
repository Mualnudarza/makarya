<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData=[
            [
                'name'=>"Operator Satu",
                'email'=>"operatorsatu@gmai.com",
                'role'=>"operator",
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>"Mahasiswa Satu",
                'email'=>"mahasiswasatu@gmai.com",
                'role'=>"mahasiswa",
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>"Pengunjung Satu",
                'email'=>"pengunjungsatu@gmai.com",
                'role'=>"pengunjung",
                'password'=>bcrypt('12345')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
