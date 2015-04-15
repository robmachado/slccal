<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use slccal\Models\Colecao;

class ColecoesTableSeeder extends Seeder
{
    public function run()
    {
        // clear table
        Colecao::truncate();
        //carrega dados
        $aRows = [
            ['colecao' => 'C03'],
            ['colecao' => 'C04'],
            ['colecao' => 'C07'],
            ['colecao' => 'GM1'],
            ['colecao' => 'GM2'],
            ['colecao' => 'CQ1'],
            ['colecao' => 'GS1'],
            ['colecao' => 'GS2'],
            ['colecao' => 'GS3'],
            ['colecao' => 'QUA.05'],
            ['colecao' => 'QUA.06']
        ];
        foreach ($aRows as $row) {
            Colecao::create($row);
        }
    }
}
