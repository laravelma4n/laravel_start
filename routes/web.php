<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mark',[
    'as' => 'marks.index',
    'uses' =>'MarkController@index'
]);

Route::get('/product',[
    'as' => 'products.index',
    'uses' =>'ProductController@index'
]);

Route::get('/category',[
    'as' => 'category.index',
    'uses' => 'CategoryController@index'
]);

Route::get('/category/create',[
    'as' =>'category.create',
    'uses' =>'CategoryController@create'
]);
Route::get('/mark/create',[
    'as' =>'mark.create',
    'uses' =>'MarkController@create'
]);
Route::get('/product/create',[
    'as' =>'product.create',
    'uses' =>'ProductController@create'
]);

Route::post('/category/store',[
    'as' => 'category.store',
    'uses' =>'CategoryController@store'
]);

Route::get('/category/edit/{id}',[
    'as' => 'category.edit',
    'uses'=>'CategoryController@edit'
]);

Route::put('/category/update',[
    'as' => 'category.update',
    'uses' => 'CategoryController@update'
]);

Route::get('/category/del/{id}',[
  'as'=>'category.del',
  'uses' => 'CategoryController@del'
]);

Route::post('/mark/store',[
    'as' => 'mark.store',
    'uses' =>'MarkController@store'
]);

Route::post('/product/store',[
    'as' => 'product.store',
    'uses' =>'ProductController@store'
]);

Route::get('/product/edit/{id}',[
    'as' => 'product.edit',
    'uses'=>'ProductController@edit'
]);

Route::put('/product/update/{id}',[
    'as' => 'product.update',
    'uses' => 'ProductController@update'
]);

Route::delete('/product/del/{id}',[
    'as' => 'product.del',
    'uses' =>'ProductController@del'
]);


//TIPO PETICIONES DE LARAVEL
//PETICIONES DE TIPO SELECT  get
//PETICIONES DE TIPO INSERT  post
//PETICIONEES DE TIPO UPDATE put
//PETICIONES DE TIPO DELETE  delete
