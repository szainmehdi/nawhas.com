<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

// Nawhakhans
Route::get('/nawhakhans', ['as' => 'artists.index', 'uses' => 'ArtistsController@index']);
Route::get('/nawhakhans/create', ['as' => 'artists.create', 'uses' => 'ArtistsController@create']);
Route::post('/nawhakhans', ['as' => 'artists.store', 'uses' => 'ArtistsController@store']);
Route::get('/nawhakhans/{nawhakhan}', ['as' => 'artists.show', 'uses' => 'ArtistsController@show']);
Route::get('/nawhakhans/{nawhakhan}/edit', ['as' => 'artists.edit', 'uses' => 'ArtistsController@edit']);
Route::put('/nawhakhans/{nawhakhan}/', ['as' => 'artists.update', 'uses' => 'ArtistsController@update']);
Route::patch('/nawhakhans/{nawhakhan}/', ['uses' => 'ArtistsController@update']);
Route::delete('/nawhakhans/{nawhakhan}/', ['as' => 'artists.destroy', 'uses' => 'ArtistsController@destroy']);

//Albums
Route::get('/nawhakhans/{nawhakhan}/albums', ['as' => 'albums.index', 'uses' => 'AlbumsController@index']);
Route::get('/nawhakhans/{nawhakhan}/albums/create', ['as' => 'albums.create', 'uses' => 'AlbumsController@create']);
Route::post('/nawhakhans/{nawhakhan}/albums', ['as' => 'albums.store', 'uses' => 'AlbumsController@store']);
Route::get('/nawhakhans/{nawhakhan}/albums/{album}', ['as' => 'albums.show', 'uses' => 'AlbumsController@show']);
Route::get('/nawhakhans/{nawhakhan}/albums/{album}/edit', ['as' => 'albums.edit', 'uses' => 'AlbumsController@edit']);
Route::put('/nawhakhans/{nawhakhan}/albums/{album}/', ['as' => 'albums.update', 'uses' => 'AlbumsController@update']);
Route::patch('/nawhakhans/{nawhakhan}/albums/{album}/', ['uses' => 'AlbumsController@update']);
Route::delete('/nawhakhans/{nawhakhan}/albums/{album}/', ['as' => 'albums.destroy', 'uses' => 'AlbumsController@destroy']);

//Nawhas
Route::get('/nawhakhans/{nawhakhan}/nawhas', ['as' => 'tracks.index', 'uses' => 'TracksController@index']);
Route::get('/nawhakhans/{nawhakhan}/nawhas/create', ['as' => 'tracks.create', 'uses' => 'TracksController@create']);
Route::post('/nawhakhans/{nawhakhan}/nawhas', ['as' => 'tracks.store', 'uses' => 'TracksController@store']);
Route::get('/nawhakhans/{nawhakhan}/nawhas/{nawha}', ['as' => 'tracks.show', 'uses' => 'TracksController@show']);
Route::get('/nawhakhans/{nawhakhan}/nawhas/{nawha}/edit', ['as' => 'tracks.edit', 'uses' => 'TracksController@edit']);
Route::put('/nawhakhans/{nawhakhan}/nawhas/{nawha}/', ['as' => 'tracks.update', 'uses' => 'TracksController@update']);
Route::patch('/nawhakhans/{nawhakhan}/nawhas/{nawha}/', ['uses' => 'TracksController@update']);
Route::delete('/nawhakhans/{nawhakhan}/nawhas/{nawha}/', ['as' => 'tracks.destroy', 'uses' => 'TracksController@destroy']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
