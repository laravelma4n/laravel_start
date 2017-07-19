<?php
use Illuminate\Database\Seeder;
class ProductsSeeder extends Seeder
{
    public function run()
    {
      DB::table('products')->insert([
        'name' => "remera",
        'description'=>'Sin descripcion',
        'category_id' => 1,
        'mark_id' => 1,
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now(),
        'deleted_at' => null
      ]);
      DB::table('products')->insert([
        'name' => "medias",
        'description'=>'Sin descripcion',
        'category_id' => 1,
        'mark_id' => 1,
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now(),
        'deleted_at' => null
      ]);

      DB::table('products')->insert([
        'name' => "jeans",
        'description'=>'Sin descripcion',
        'category_id' => 2,
        'mark_id' => 1,
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now(),
        'deleted_at' => null
      ]);
    }
}
