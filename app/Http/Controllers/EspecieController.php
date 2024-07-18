<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especie;

class EspecieController extends Controller
{
    public function index()
    {
        $especies = Especie::all();
        return view('especies.index', compact('especies'));
    }

    public function especiesEnExtincion()
    {
        $especies = Especie::withCount('arboles')->having('arboles_count', '<', 10)->get();
        return view('especies.en_extincion', compact('especies'));
    }
}
