<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes;
    protected $table="products";
    protected $filleable=
              [
                'id',
                'name',
                'description'
              ];
    protected $dates = ['deleted_at'];
    //PRODCUTO VA A TENER UNA CATEGORIA
    public function category(){
      return $this->belongsTo('App\Category');
    }
    public function mark(){
      return $this->belongsTo('App\Mark');
    }
}
