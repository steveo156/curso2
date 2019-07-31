<?php

Route::get('/','PagesController@home')->name('home');

Route::get('saludos/{nombre?}','PagesController@saludo')->where('nombre',"[A-Za-z]+")->name('saludos');

Route::resource('mensajes','MessagesController');


Auth::routes();


