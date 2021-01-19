<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsuarioSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('usuarios')->insert([
      'name' => "admin",
      'nombre_completo' => "administrador de proyecto",
      'email' => Str::random(10) . '@gmail.com',
      'tipo' => '1',
      'password' => 'admin',
      //'password' => Hash::make('admin'),
    ]);
  }
}
