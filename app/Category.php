<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
  use SoftDeletes;
  protected $table="categories";
  protected $filleable=
            [
              'id',
              'type'
            ];
  protected $dates = ['deleted_at'];
  public function products(){
    return $this->hasMany('App\Product');
  }
}
