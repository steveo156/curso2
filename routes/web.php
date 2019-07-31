<?php

Route::get('/','PagesController@home')->name('home');

Route::get('contactame','PagesController@contactos')->name('contactos');
Route::post('contacto','PagesController@mensajes');

Route::get('saludos/{nombre?}','PagesController@saludo')->where('nombre',"[A-Za-z]+")->name('saludos');