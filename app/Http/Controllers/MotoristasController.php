<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;

class MotoristasController extends Controller
{

    public function index()
    {
        $motoristas = Motorista::all();
        return view('index', ['motoristas' => $motoristas]);
    }

    public function create()
    {
        return view('motoristas.create');
    }

    public function store(Request $request)
    {
        Motorista::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'cnh' => $request->cnh,
        ]);
        return 
        redirect()->back()->with('message', 'Motorista cadastrado com sucesso.');

    }

    public function show()
    {
        $motoristas = Motorista::all();
        return view('motoristas.list', ['motoristas' => $motoristas]);
    }

    public function destroy($id)
    {
        $motorista = Motorista::findOrFail($id);
        $motorista->delete();
        return 
        redirect()->back()->with('message', 'Motorista excluido com sucesso.');
    }

    public function edit($id)
    {
        $motorista = Motorista::findOrFail($id);
        return view('motoristas.edit', ['motorista' => $motorista]);
    }

    public function update(Request $request, $id)
    {
        $motorista = Motorista::findOrFail($id);
        $motorista->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'cnh' => $request->cnh,
        ]);
        return 
        redirect()->back()->with('message', 'Motorista atualizado com sucesso.');
    }
}
