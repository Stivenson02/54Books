<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $states=  [
      ['name' => 'Arte'],
      ['name' => 'Salud'],
      ['name' => 'Ciencia'],
      ['name' => 'Diseño'],
      ['name' => 'Ingenieria'],
      ['name' => 'Empresariales'],
      ['name' => 'Cocina'],
      ['name' => 'Literatura'],
      ['name' => 'Deportes'],
      ['name' => 'Aportes'],
 
    ];
    Type::insert($states);
    }
}
