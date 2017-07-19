<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('categories')->insert([
      'type' => "Deportivo",
      'created_at' => Carbon\Carbon::now(),
      'updated_at' => Carbon\Carbon::now(),
      'deleted_at' => null
    ]);

    DB::table('categories')->insert([
      'type' => "Otro",
      'created_at' => Carbon\Carbon::now(),
      'updated_at' => Carbon\Carbon::now(),
      'deleted_at' => null
    ]);

  }
}
