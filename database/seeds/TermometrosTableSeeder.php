<?php

namespace slccal;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use slccal\Models\Termometro as Termo;

class TermometrosTableSeeder extends Seeder
{
    public function run()
    {
        // clear table
        Termo::truncate();
        //carrega dados
        //codigo colecao classe material nominal unidade frequencia situacao observacoes
        $aRows = [
            ['codigo' => 'VTH-0722', 'marca' => 'HIGROTHERM', 'modelo' => '', 'certificado' => 'LV34714-13-RO', 'frequencia' => '24'],
            ['codigo' => 'VTH-0723', 'marca' => 'HIGROTHERM', 'modelo' => '', 'certificado' => 'LV34714-13-RO', 'frequencia' => '24']
        ];
        foreach ($aRows as $row) {
            Termo::create($row);
        }
    }
}
