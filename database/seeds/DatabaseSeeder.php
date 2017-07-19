<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call(MarksSeeder::class);
         $this->call(CategoriesSeeder::class);
         $this->call(ProductsSeeder::class);
    }
}
