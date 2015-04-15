<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use slccal\Models\Tolerancia as Tolerancia;

class ToleranciaTableSeeder extends Seeder
{
    public function run()
    {
        // clear table
        Tolerancia::truncate();
        //carrega dados
        //'classe', 'min' => , 'max' => , 'erro' =>
        $aRows = [
            ['classe' => 'I', 'min' => '0', 'max' => '50000', 'erro' =>'0.5'],
            ['classe' => 'I', 'min' => '50001', 'max' => '200000', 'erro' =>'1.0'],
            ['classe' => 'I', 'min' => '200001', 'max' => '4294967294', 'erro' =>'1.5'],
            ['classe' => 'II', 'min' => '0', 'max' => '5000', 'erro' =>'0.5'],
            ['classe' => 'II', 'min' => '5001', 'max' => '20000', 'erro' =>'1.0'],
            ['classe' => 'II', 'min' => '20001', 'max' => '100000', 'erro' =>'1.5'],
            ['classe' => 'III', 'min' => '0', 'max' => '500', 'erro' =>'0.5'],
            ['classe' => 'III', 'min' => '501', 'max' => '2000', 'erro' =>'1.0'],
            ['classe' => 'III', 'min' => '2001', 'max' => '10000', 'erro' =>'1.5'],
            ['classe' => 'IV', 'min' => '0', 'max' => '50', 'erro' =>'0.5'],
            ['classe' => 'IV', 'min' => '51', 'max' => '200', 'erro' =>'1.0'],
            ['classe' => 'IV', 'min' => '201', 'max' => '1000', 'erro' =>'1.5']
        ];
        foreach ($aRows as $row) {
            Tolerancia::create($row);
        }
    }
}
