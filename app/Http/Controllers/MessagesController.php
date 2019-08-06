<?php

namespace App\Http\Controllers;

use App\Events\MessageWasReceived;
use App\Http\Requests\CreateMessageRequest;
use App\Message;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Mail;

class MessagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('create','store');
    }
    public function index()
    {
        $messages = Message::with(['user','note','tags'])->orderBy('id','desc')->get();
        return view('messages.index',compact('messages'));
    }

    public function create()
    {
        return view('messages.create');
    }


/*    public function store(Request $request)
    {
        // Guardar mensaje
        Message::create(request()->all());
        // Redireccionar
        return redirect()->route('mensajes.create')->with('info','Mensaje enviado');
    }*/

    public function store(CreateMessageRequest $request)
    {
        /*$message = Message::create($request->validated());
        if(auth()->check())
        {
            auth()->user()->messages()->save($message);
        }*/

        $message = Message::create($request->all());
        if(auth()->check())
        {
            auth()->user()->messages()->save($message);
        }

        event(new MessageWasReceived($message));

        return redirect()->route('mensajes.create')->with('info','Mensaje enviado');
    }



    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.show',compact('message'));
    }


    public function edit($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.edit',compact('message'));
    }


    public function update(Request $request, $id)
    {
        $message = Message::findOrFail($id);
        $message->update($request->all());
        return redirect()->route('mensajes.index');
    }


    public function destroy($id)
    {
        Message::findOrFail($id)->delete();
        return redirect()->route('mensajes.index');
    }
}
