<?php

use Illuminate\Database\Seeder;
use App\Plans;

class PlansTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $states = [
        ['name' => 'Plan Hilo', 'coste' => '2000', 'status' => 0, 'nbook' => 1],
        ['name' => 'Plan Arena', 'coste' => '10000', 'status' => 1, 'nbook' => 2],
        ['name' => 'Plan Metal', 'coste' => '20000', 'status' => 2, 'nbook' => 5],
        ['name' => 'Plan Cobre', 'coste' => '30000', 'status' => 3, 'nbook' => 8],
        ['name' => 'Plan Plata', 'coste' => '50000', 'status' => 4, 'nbook' => 10],
        ['name' => 'Plan Oro', 'coste' => '80000', 'status' => 5, 'nbook' => 1000],
        ];
        Plans::insert($states);
    }

}
