<?php
Route::get('/voyages', 'VoyagesController@showVoyages')->name('listeVoyages');
Route::get('/stats', 'VoyagesController@stats')->name('stats');
Route::get('/sejour/{id}','VoyagesController@showOneVoyage')->name('sejour');
Route::get('/', function () {return view('site/index');});
Route::prefix('admin')->group(function () {
    Route::resource('voyages', 'VoyagesController', ['prefix' => 'admin']);
    Route::get('/create', function () {return view('site/create');});
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'VoyagesController@search');

