<?php

Route::get('/','PagesController@home')->name('home');

Route::get('contactame','PagesController@contactos')->name('contactos');

Route::get('saludos/{nombre?}','PagesController@saludo')->where('nombre',"[A-Za-z]+")->name('saludos');