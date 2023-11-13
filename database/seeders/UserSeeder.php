<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                    'id_role'   =>  1,
                    'nama' => 'Pak Firman',
                    'username'  =>  "direktur",
                    'password'  =>  Hash::make('direktur')
                ],
                [
                    'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                    'id_role'   =>  2,
                    'nama' => 'Melly',
                    'username'  =>  "manajerasd",
                    'password'  =>  Hash::make('manajerasd')
                ],
                [
                    'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                    'id_role'   =>  3,
                    'nama' => 'Dzikri',
                    'username'  =>  "supervisor",
                    'password'  =>  Hash::make('supervisor')
                ],
                [
                    'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                    'id_role'   =>  4,
                    'nama' => 'Sholikin',
                    'username'  =>  "stafasdasd",
                    'password'  =>  Hash::make('stafasdasd')
                ]
            ]
        );
    }
}
