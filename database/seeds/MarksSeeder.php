<?php

use Illuminate\Database\Seeder;

class MarksSeeder extends Seeder
{
  public function run()
  {
    DB::table('marks')->insert([
      'name' => "Nike",
      'created_at' => Carbon\Carbon::now(),
      'updated_at' => Carbon\Carbon::now(),
      'deleted_at' => null
    ]);

    DB::table('marks')->insert([
      'name' => "Adidas",
      'created_at' => Carbon\Carbon::now(),
      'updated_at' => Carbon\Carbon::now(),
      'deleted_at' => null
    ]);

  }
}
