<?php


Route::get('/', function () {
    return view('welcome');
});


// REGISTRATION
Route::get('/register', 'RegistrationController@create');
Route::get('/register/edit', 'RegistrationController@edit');
Route::post('/register', 'RegistrationController@store');
Route::patch('/register', 'RegistrationController@update');

// SESSION
Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');

// ARTICLE
Route::get('/articles/create', 'ArticleController@create');
Route::get('/articles/{article}', 'ArticleController@show');
Route::get('/articles', 'ArticleController@index');
Route::get('/myarticles', 'ArticleController@mine');
Route::get('/articles/{article}/edit', 'ArticleController@edit');
Route::patch('/articles/{article}', 'ArticleController@update');
Route::post('/articles', 'ArticleController@store');
Route::get('/articles/{article}/destroy', 'ArticleController@destroy');

