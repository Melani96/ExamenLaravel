<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\enviarMailable;

class mailController extends Controller
{
    public function enviarMail(Request $request){
        
        $nombre = $request->nombre;
        $mail = $request->email;
        $asunto = $request->asunto;
        $mensaje = $request->mensaje;
        
        Mail::to('autor@gmail.com')->send(new enviarMailable($nombre, $mail, $asunto, $mensaje));
        
        return back();
    }
}
