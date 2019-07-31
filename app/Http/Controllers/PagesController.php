<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


 	public function home(){
 		return view('home');
 	}

 	public function contactos(){
 		return view('contactos');
 	}

 	public function saludo($nombre = "Invitado"){
 		return view('saludo',compact('nombre'));
 	}

 	public function mensajes(Request $request){
 		return $request->all();
 	}

}
