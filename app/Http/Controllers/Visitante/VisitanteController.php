<?php

namespace App\Http\Controllers\Visitante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso; // use seu model de cursos




class VisitanteController extends Controller
{

      /**
     * Lista de visitante
     */
    public function index()
    {
        return view('visitante.inicio'); // isso mostra a view 'resources/views/visitante/index.blade.php'
    }

    /**
     * Exibe formulário de cadastro de visitante
     */
    public function create()
    {
        //
    }

    /**
     * Salva novo visitante
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Detalhes do visitante.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Formulário para editar visitante
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Atualiza visitante
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove visitante
     */
    public function destroy(string $id)
    {
        //
    }
}
