<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //Laravel asume que la tabla a la que se van a insertar los datos se llama igual que el modelo pero en minúsculas y en plural, de no ser así se puede especificar que tabla queremos usar
   // protected $table = 'nombre-de-la-tabla';

	// Esta clase nso protege de asignacion masiva de datos, permitiendo insertar unicamente los datos especificados en el array fillable
	protected $fillable = ['nombre','email','mensaje'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function note()
	{
		return $this->morphOne(Note::class, 'notable');
	}

	public function tags()
	{
		return $this->morphToMany(Tag::class, 'taggable');
	}
}
