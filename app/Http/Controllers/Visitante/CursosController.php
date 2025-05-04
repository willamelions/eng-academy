<?php

namespace App\Http\Controllers\Visitante;
use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexPublico() {
        return view('cursos.publico', ['cursos' => Curso::all()]);

    }
    public function indexPrivado() {
        // Aqui você pode buscar os cursos disponíveis para o usuário
        return view('cursos.privados', ['cursos' => Auth::user()->cursos]);
    }
    
    public function meusCursos()
    {
        $cursos = Curso::all(); // ou somente os cursos do usuário, se aplicável
        return view('cursos.meuscursos', compact('cursos')); // Garante que existe a view 'meuscursos.blade.php'
    }

    public function comprar($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.comprar', compact('curso'));
    }
    public function processarPagamento(Request $request, $id)
{
    $metodo = $request->input('metodo_pagamento');
    $curso = Curso::findOrFail($id);

    switch ($metodo) {
        case 'cartao':
            // Simula processamento de cartão
            // Aqui você pode salvar os dados em uma tabela de pagamentos, etc.
            $mensagem = 'Pagamento com cartão processado com sucesso!';
            break;

        case 'pix':
            // Simula a geração de um QR Code PIX (poderia integrar com API externa)
            $mensagem = 'QR Code PIX gerado. Verifique seu e-mail ou área do usuário.';
            break;

        case 'boleto':
            // Simula a geração de boleto bancário
            $mensagem = 'Boleto gerado com sucesso. Verifique seu e-mail ou área do usuário.';
            break;

        default:
            return redirect()->back()->with('error', 'Método de pagamento inválido.');
    }

    // Aqui você poderia associar o curso ao usuário autenticado, se necessário

    return redirect()->route('meusCursos')->with('success', $mensagem);
}

    public function publicos()
{
    // Você pode buscar os cursos públicos no banco de dados
    $cursos = Curso::where('status', 'ativo')->get();

    // Retorna a view correspondente
    return view('visitante.cursos', compact('cursos'));
}
    //Tela de DETALHAMENTO DO CUROS
    public function detalhes($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.detalhes', compact('curso'));
    }

    
    public function index()
    {
         // ou algum outro método para obter cursos
        return view('visitante.cursos', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.detalhes', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
