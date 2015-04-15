<?php

namespace slccal;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use slccal\Models\Massclasse as Classe;

class CalibrationscertTableSeeder extends Seeder
{
    public function run()
    {
        // clear table
        Classe::truncate();
        //carrega dados
        //certificado emissor rbc data pdf
        $aRows = [
            ['certificado'=>'198/2014', 'emissor'=>'UNICAL', 'rbc'=>'529', 'data'=>'2014-10-09', 'pdf'=>''],
            ['certificado'=>'199/2014', 'emissor'=>'UNICAL', 'rbc'=>'529', 'data'=>'2014-10-16', 'pdf'=>''],
            ['certificado'=>'210/2014', 'emissor'=>'UNICAL', 'rbc'=>'529', 'data'=>'2014-11-12', 'pdf'=>''],
            ['certificado'=>'M-43545/13', 'emissor'=>'KNWaagen', 'rbc'=>'091', 'data'=>'2013-05-08', 'pdf'=>''],
            ['certificado'=>'M-43047/13', 'emissor'=>'KNWaagen', 'rbc'=>'091', 'data'=>'2013-03-26', 'pdf'=>''],
            ['certificado'=>'M-43898/13', 'emissor'=>'KNWaagen', 'rbc'=>'091', 'data'=>'2013-06-04', 'pdf'=>''],
            ['certificado'=>'M-47451/14', 'emissor'=>'KNWaagen', 'rbc'=>'091', 'data'=>'2014-03-24', 'pdf'=>''],            
            ['certificado'=>'M-48043/14', 'emissor'=>'KNWaagen', 'rbc'=>'091', 'data'=>'2014-05-13', 'pdf'=>''],
            ['certificado'=>'M-48557/14', 'emissor'=>'KNWaagen', 'rbc'=>'091', 'data'=>'2014-07-07', 'pdf'=>''],
            ['certificado'=>'M-49088/14', 'emissor'=>'KNWaagen', 'rbc'=>'091', 'data'=>'2014-08-19', 'pdf'=>''],
            ['certificado'=>'M-49090/14', 'emissor'=>'KNWaagen', 'rbc'=>'091', 'data'=>'2014-08-18', 'pdf'=>''],
            ['certificado'=>'M-49091/14', 'emissor'=>'KNWaagen', 'rbc'=>'091', 'data'=>'2014-08-18', 'pdf'=>''],
            ['certificado'=>'LV34713-13-RO', 'emissor'=>'VISOMES', 'rbc'=>'0127', 'data'=>'2013-09-05', 'pdf'=>'']
        ];
        foreach ($aRows as $row) {
            Classe::create($row);
        }
    }
}
