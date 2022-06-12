<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'El correo y clave son incorrectos, por favor verificar datos'
            ]);
        }
        return redirect()->to('/menu');
    }
    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
    public function login(){
        return view('auth.login');
    }
}
