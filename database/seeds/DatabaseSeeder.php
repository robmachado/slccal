<?php

namespace slccal;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('CalibrationscertTableSeeder');
        $this->call('ColecoesTableSeeder');
        $this->call('MassTableSeeder');
        $this->call('MassclibrationsTableSeeder');
        $this->call('MassclasseTableSeeder');
        $this->call('NotaTableSeeder');
        $this->call('TermometrosTableSeeder');
        $this->call('ToleranciaTableSeeder');
        $this->call('UserTableSeeder');
    }
}
