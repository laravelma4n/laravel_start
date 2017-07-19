<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Mark extends Model
{
  use SoftDeletes;
  protected $table="marks";
  protected $filleable=
            [
              'id',
              'name'
            ];
  protected $dates = ['deleted_at'];
  public function products(){
    return $this->hasMany('App\Product');
  }
}
