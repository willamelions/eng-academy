@extends('layouts.app')

@section('title', $curso->titulo)

@section('content')
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Imagem do curso -->
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="{{ asset('images/' . $curso->imagem) }}" alt="{{ $curso->titulo }}" class="img-fluid rounded shadow">
        </div>

        <!-- Detalhes do curso -->
        <div class="col-md-6">
            <h2 class="mb-3">{{ $curso->titulo }}</h2>

            <h4 class="mt-4">Descrição</h4>
            <p>
                O curso NR35 - Trabalho em Altura é um treinamento obrigatório para todos os profissionais que 
                realizam atividades acima de 2 metros do nível inferior, onde haja risco de queda. O objetivo é capacitar os trabalhadores para a 
                execução segura dessas atividades, conforme exigido pela Norma Regulamentadora nº 35 do Ministério do Trabalho.
            </p>

            <h4 class="mt-4">Objetivo</h4>
            <ul>
                <li>Compreender os requisitos mínimos e as medidas de proteção para o trabalho em altura.</li>
                <li>Reconhecer e prevenir os riscos inerentes a esse tipo de atividade.</li>
                <li>Aplicar técnicas seguras e uso correto de equipamentos de proteção individual (EPIs).</li>
            </ul>

            <h4 class="mt-4">Conteúdo Programático</h4>
            <ul>
                <li>Introdução à NR35 e legislação aplicável</li>
                <li>Análise de risco e condições impeditivas</li>
                <li>Medidas de prevenção e controle de riscos</li>
                <li>Equipamentos de Proteção Individual (EPIs)</li>
                <li>Procedimentos de emergência e resgate</li>
                <li>Técnicas corretas de movimentação e trabalho</li>
                <li>Responsabilidades do empregador e do trabalhador</li>
            </ul>

            <h4 class="mt-4">Informações do Curso</h4>
            <ul class="list-unstyled">
                <li><strong>Carga Horária:</strong> {{ $curso->carga_horaria }} horas</li>
                <li><strong>Status:</strong> {{ ucfirst($curso->status) }}</li>
                <li><strong>Data de Início:</strong> {{ \Carbon\Carbon::parse($curso->data_inicio)->format('d/m/Y') }}</li>
                <li><strong>Data de Término:</strong> {{ \Carbon\Carbon::parse($curso->data_fim)->format('d/m/Y') }}</li>
            </ul>

            <div class="mt-4">
                <a href="{{ route('cursos.publicos') }}" class="btn btn-outline-secondary me-2">Voltar</a>
                <a href="{{ route('cursos.comprar', $curso->id) }}" class="btn btn-primary">Comprar Curso</a>
            </div>
        </div>
    </div>
</div>
<!-- Detalhes do curso -->

@endsection
