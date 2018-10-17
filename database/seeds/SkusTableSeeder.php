<?php

use App\Sku;
use Illuminate\Database\Seeder;

class SkusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sku::create(array(
            'name'               => 'Rice',
            'weight'             => '25 kg',
            'status'             => 'Active',
        ));
        Sku::create(array(
            'name'               => 'Oil',
            'weight'             => '5 Litre',
            'status'             => 'Active',
        ));
        Sku::create(array(
            'name'               => 'Moida',
            'weight'             => '15 Kg',
            'status'             => 'Active',
        ));
    }
}
