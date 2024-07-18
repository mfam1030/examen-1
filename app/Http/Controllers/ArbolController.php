<?php

namespace App\Http\Controllers;

use App\Models\Arbol;
use App\Models\Especie;
use Illuminate\Http\Request;

class ArbolController extends Controller
{
    public function index()
    {
        $arboles = Arbol::with('especie')->get();
        return view('arboles.index', compact('arboles'));
    }

    public function arbolesNoSeñalizados()
    {
        // Aquí puedes colocar la lógica para obtener los árboles no señalizados
        $arboles = Arbol::where('señalizado', false)->get();

        // Retornar la vista correspondiente, por ejemplo:
        return view('arboles.no_señalizados', compact('arboles'));
    }

    public function create()
    {
        $especies = Especie::all();
        return view('arboles.create', compact('especies'));
    }
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'descripcion' => 'required|string|max:255',
            'latitud' => 'required|numeric',
            'longitud' => 'required|numeric',
            'señalizado' => 'required|boolean',
            'año_plantado' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

       
        $arbol = Arbol::create($validatedData);

        
        return redirect()->route('arboles.index')->with('success', 'Árbol creado exitosamente.');
    }

    
}



