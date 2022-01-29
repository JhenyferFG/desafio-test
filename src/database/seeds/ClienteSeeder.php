<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
                'nome' => 'Synyter Gates',
                'telefone' => '31989898989',
                'cpf' => '05313910000',
                'placa_carro' => 'KFL3575'
        ]);
        DB::table('clientes')->insert([
                'nome' => 'Serj Tankian',
                'telefone' => '31989898989',
                'cpf' => '75745913002',
                'placa_carro' => 'JRX8866'
        ]);
    }

    
}
