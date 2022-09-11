<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Costumer;

class CostumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Costumer::factory()->count(20)->hasInvoices(10)->create();
        Costumer::factory()->count(100)->hasInvoices(5)->create();
        Costumer::factory()->count(100)->hasInvoices(3)->create();
        Costumer::factory()->count(5)->create();
    }
}
