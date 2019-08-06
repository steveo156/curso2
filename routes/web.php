<?php
/*App\User::create([
	'name' => 'Pepe',
	'email' => 'pepe@hotmail.com',
	'password' => bcrypt('123123'),


]);*/


// DB::listen(function($query){
// 	echo "<pre> {$query->sql} </pre>";
// });


Route::get('roles', function(){
	return App\Role::with('user')->get();
});
Route::get('/','PagesController@home')->name('home');

Route::get('saludos/{nombre?}','PagesController@saludo')->where('nombre',"[A-Za-z]+")->name('saludos');

Route::resource('mensajes','MessagesController');
Route::resource('usuarios','UsersController');


Auth::routes();


