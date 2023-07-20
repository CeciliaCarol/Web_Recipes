<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receitas = Receita::all();
        return view('receitas.index', compact('receitas'));
    }

    public function myReceitas() {
        $userId = auth()->user()->id;
        $receitas = Receita::where('user_id', $userId)->get();
        return view('receitas.myreceitas', compact('receitas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('receitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'ingredientes' => 'required',
            'instrucoes' =>'required',
        ]);

        $userId = auth()->user()->id;

        $receita = new Receita($request->all());
        $receita->user_id = auth()->user()->id;
        $receita->save();

        return redirect()->route('receitas.my_receitas')->with('success', 'Receita criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $receita = Receita::findOrFail($id);
        return view('receitas.show', compact('receita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $receita = Receita::findOrFail($id);
        return view('receitas.edit', compact('receita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'ingredientes' => 'required',
            'instrucoes' =>'required',
        ]);

        $receita = Receita::findOrFail($id);
        $receita->update($request->all());

        return redirect()->route('receitas.my_receitas')->with('success', 'Receita atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $receita = Receita::findOrFail($id);
        $receita->delete();

        return redirect()->route('receitas.my_receitas')->with('success', 'Receita excluída com sucesso!');
    }
}
