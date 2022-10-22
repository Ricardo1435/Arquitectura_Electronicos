<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function create(Request $request)
    {
        $data = $this->validateForm($request);
        Comentario::insert($data);
        return redirect(route('home'));
    }

    public function validateForm (Request $request){
        $validatedData = $request->validate([
            'nombre'=>'required|max:100',
            'telefono'=>'max:25',
            'correo'=>'max:75',
            'comentario'=>'required'
        ]);
        return $validatedData;
    }
}
