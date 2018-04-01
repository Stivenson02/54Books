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
          ['name' => 'Plan Arena', 'coste' => '10000', 'status' => 1],
          ['name' => 'Plan Metal', 'coste' => '20000', 'status' => 2],
          ['name' => 'Plan Cobre', 'coste' => '30000', 'status' => 3],
          ['name' => 'Plan Plata', 'coste' => '50000', 'status' => 4],
          ['name' => 'Plan Oro', 'coste' => '80000', 'status' => 5],
        ];
        Plans::insert($states);
    }

}
