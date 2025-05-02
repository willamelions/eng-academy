<?php

use App\Http\Controllers\Visitante\CursosController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Visitante\VisitanteController;
use Illuminate\Contracts\View\View;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('inicio',function (){
    return view('visitante/inicio');
});*/

Route::get('/visitante', [VisitanteController::class, 'index']);
Route::get('/cursos',[CursosController::class, 'index']);



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