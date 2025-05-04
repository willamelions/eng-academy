<?php

use App\Http\Controllers\Autenticacao\LoginController; // use correto!
use App\Http\Controllers\Visitante\CursosController;
use App\Http\Controllers\Visitante\VisitanteController;
use Barryvdh\DomPDF\Facade\Pdf; // Se for usar DomPDF
use Illuminate\Support\Facades\Route;
use App\Models\Curso;

Route::get('/', function () {
    return view('welcome');
});

// Rota de VISITANTE 
Route::get('/visitante', [VisitanteController::class, 'index']);

Route::get('/cursos', [CursosController::class, 'index'])->name('visitante.cursos');

//Rota COMPRA DE CURSOS
Route::get('/curso/comprar/{id}', [CursosController::class, 'comprar'])->name('curso.comprar');

//Geração do ARQUIVO PDF
Route::get('/boleto/pdf', function () {
    // Exemplo simples de geração de PDF com DomPDF
    $pdf = Pdf::loadView('boleto.pdf'); // Crie essa view
    return $pdf->download('boleto.pdf');
})->name('boleto.pdf');

// rota de LOGIN e CADASTRO com Controller
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/cadastro', [LoginController::class, 'showCadastroForm'])->name('cadastro');
Route::post('/cadastro', [LoginController::class, 'cadastrar'])->name('cadastro.salvar');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Página SOBRE (Conteúdo sobre a plataforma)
Route::view('/sobre', 'sobre')->name('sobre');

//Página de DASHBOARD
Route::get('cursos/meuscursos', function () {return view('meuscursos');})->middleware('auth')->name('meuscursos');

//Route::get('/meus-cursos', [CursoController::class, 'meusCursos'])
//    ->middleware(['auth', 'curso.pago']);
    
Route::get('/meuscursos', [CursosController::class, 'meusCursos'])->name('meuscursos');

//Rota de PAGAMENTO
Route::get('/cursos/comprar/{id}', function ($id) {
    $curso = Curso::findOrFail($id);
    return view('cursos.comprar', compact('curso'));
})->name('cursos.comprar');

//PROCESSAR PAGAMENTO
Route::post('/cursos/{id}/processar-pagamento', [CursosController::class, 'processarPagamento'])
    ->name('cursos.processarPagamento');

//Rota de consulta DETALHES DO CURSO.
Route::get('/cursos/{id}/detalhes', [CursosController::class, 'detalhes'])->name('cursos.detalhes');
Route::get('/cursos/{id}', [CursosController::class, 'show'])->name('cursos.detalhes');



Route::get('/cursos', [CursosController::class, 'index'])->name('cursos.index');


Route::get('/cursos-publicos', [CursosController::class, 'publicos'])->name('cursos.publicos');
//Route::get('/cursos-publicos', [CursosController::class, 'index'])->name('cursos-publicos');
//Rota de DETALHE DO CURSO
Route::get('/cursos/{id}/detalhes', [CursosController::class, 'detalhes'])->name('cursos.detalhes');

/*Route::prefix('visitante')->group(function(){
    Route::get('inicio', function(){
        return "inicio";
    });
    Route::get('cursos', function(){
        return "cursos";
    });
});*/


/*Route::prefix('usuario')->group(function(){
    Route::get('certificado', function(){
        return "CERTIFICADOS - PÁGINA EM MANUTENÇÃO!";
    });
    Route::get('meus-cursos', function(){
        return "MEUS CURSOS - PÁGINA EM MANUTENÇÃO!";
    });
    Route::get('painel', function(){
       return "PAINEL - PÁGINA EM MANUTENÇÂO!"; 
    });
    Route::get('perfil', function(){
        return "PERFIL - PÁGINA EM MANUTENÇÃO!";
    });
    Route::get('visualizar-curso', function(){
        return "VISUALIZAR CURSOS PÁGINA EM MANUTENÇÃO!";
    });
});*/