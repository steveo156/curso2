<?php

Route::get('/', function(){
	return view('home');
})->name('home');

/*Route::get('contactame',['as' => 'contactos',function(){
	return "seccion de contactos";
}]);*/

Route::get('contactame',function(){
	return view('contactos');
})->name('contactos');

Route::get('saludos/{nombre?}', function($nombre = "invitado"){
	// return view('saludo',['nombre'=>$nombre]);
	return view('saludo')->with(['nombre'=>$nombre]);
})->where('nombre',"[A-Za-z]+")->name('saludos');