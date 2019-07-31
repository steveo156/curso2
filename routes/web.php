<?php

Route::get('/','PagesController@home')->name('home');

Route::get('contactame','PagesController@contactos')->name('contactos');
Route::post('contacto','PagesController@mensajes');

Route::get('saludos/{nombre?}','PagesController@saludo')->where('nombre',"[A-Za-z]+")->name('saludos');

Route::get('mensajes', 'MessagesController@index')->name('messages.index');
Route::get('mensajes/create', 'MessagesController@create')->name('messages.create');
Route::post('mensajes', 'MessagesController@store')->name('messages.store');
Route::get('mensajes/{id}', 'MessagesController@show')->name('messages.show');
Route::get('mensajes/{id}/edit', 'MessagesController@edit')->name('messages.edit');
Route::put('mensajes/{id}', 'MessagesController@update')->name('messages.update');
Route::delete('mensajes/{id}', 'MessagesController@destroy')->name('messages.destroy');