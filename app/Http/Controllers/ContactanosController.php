<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $correo = new ContactanosMailable($request->all());
        Mail::to('mariaalvarez11514@gmail.com')->send($correo);
        return "Mensaje Enviado";
    }
}
