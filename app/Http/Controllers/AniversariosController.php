<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aniversario;

class AniversariosController extends Controller
{
    public function index()
    {
        $aniversarios = Aniversario::all();
        return view('aniversarios.index', compact('aniversarios'));
    }

    public function create()
    {
        return view('aniversarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_aniversariante' => 'required',
            'data_nascimento' => 'required|date',
            'nro_telefone' => 'required',
        ]);
        Aniversario::create($request->all());
        return redirect()->route('aniversarios.index')->with('success', 'Aniversariante criado com sucesso!');

    }

    public function edit(Aniversario $aniversario)
    {
        return view('aniversarios.edit', compact('aniversario'));
    }

    public function update(Request $request, Aniversario $aniversario)
    {
        $request->validate([
            'nome_aniversariante' => 'required',
            'data_nascimento' => 'required|date',
            'nro_telefone' => 'required',
        ]);
        $aniversario->update($request->all());
        return redirect()->route('aniversarios.index')->with('success', 'Aniversariante atualizado com sucesso!');
        
    }

    public function destroy(Aniversario $aniversario)
    {
        $aniversario->delete();
        return redirect()->route('aniversarios.index');
    }

}
