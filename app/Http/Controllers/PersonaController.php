<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

        return view('personas',['personas' => $personas]);
    }

    public function actualizar_persona(Request $request) {

        global $data;
        $data = $request;
        global $id;
        $id = $request['id'];

        $file = $request->file('img');
        $data['img'] = $file->store('photos');


        // FIX: is not working idk why i have no internet btw
        DB::transaction(function () {
            DB::update('update personas set name = '. $data['name'] .' where name = '. $id .'');
            DB::update('update personas set email = '. $data['email'] .' where name = '. $id .'');
            DB::update('update personas set img = '. $data['img'] .' where name = '. $id .'');
        }, 3);

        return redirect('/');
    }

    // TODO:: create a functionn to delete personas
}
