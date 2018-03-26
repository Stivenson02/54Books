<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $states=  [
      ['state' => 'Amazonas'],
      ['state' => 'Antioquia'],
      ['state' => 'Arauca'],
      ['state' => 'Atlántico'],
      ['state' => 'Bogotá'],
      ['state' => 'Bolívar'],
      ['state' => 'Boyacá'],
      ['state' => 'Caldas'],
      ['state' => 'Caquetá'],
      ['state' => 'Casanare'],
      ['state' => 'Cauca'],
      ['state' => 'Cesar'],
      ['state' => 'Chocó'],
      ['state' => 'Córdoba'],
      ['state' => 'Cundinamarca'],
      ['state' => 'Guainía'],
      ['state' => 'Guaviare'],
      ['state' => 'Huila'],
      ['state' => 'La Guajira'],
      ['state' => 'Magdalena'],
      ['state' => 'Meta'],
      ['state' => 'Nariño'],
      ['state' => 'Norte de Santander'],
      ['state' => 'Putumayo'],
      ['state' => 'Quindío'],
      ['state' => 'Risaralda'],
      ['state' => 'San Andrés y Providencia'],
      ['state' => 'Santander'],
      ['state' => 'Sucre'],
      ['state' => 'Tolima'],
      ['state' => 'Valle del Cauca'],
      ['state' => 'Vaupés'],
      ['state' => 'Vichada'],
    ];
    State::insert($states);
  }
}
