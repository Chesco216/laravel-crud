<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    public function subir_persona(Request $request) {
        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'img' => ['required', 'image'],
            'passwd' => 'required',
        ]);

        $fields['passwd'] = bcrypt($fields['passwd']);
        $file = $request->file('img');
        $fields['img'] = $file->store('photos');

        Persona::create($fields);

        return redirect('/');
    }

    public function listar_personas() {
        $personas = DB::table('personas')->get();

        return view('personas');
    }
}
