<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->text("description");
          $table->timestamps();
          $table->softDeletes();
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('categories');
          $table->integer('mark_id')->unsigned();
          $table->foreign('mark_id')->references('id')->on('marks');

      });
    }

    public function down()
    {
      Schema::dropIfExists('products');
    }
}
