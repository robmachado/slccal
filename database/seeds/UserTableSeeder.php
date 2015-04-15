<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use slccal\Models\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // clear table
        User::truncate();
        //carrega dados
        $aRows = [
            [
                'username' => 'administrador',
                'fullname' => 'administrador',
                'email' => 'linux.rlm@gmail.com',
                'password' => Hash::make('admin')
            ]
        ];
        foreach ($aRows as $row) {
            User::create($row);
        }
    }
}
