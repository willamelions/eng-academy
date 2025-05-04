@extends('layouts.app')

@section('title', $curso->titulo)

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h2>{{ $curso->titulo }}</h2>
            <img src="{{ asset('images/' . $curso->imagem) }}" alt="Imagem do curso {{ $curso->titulo }}" class="img-fluid mb-4 rounded shadow">

            <p><strong>Descrição:</strong> {{ $curso->descricao }}</p>
            <p><strong>Carga Horária:</strong> {{ $curso->carga_horaria }} horas</p>
            <p><strong>Status:</strong> {{ ucfirst($curso->status) }}</p>
            <p><strong>Data de Início:</strong> {{ \Carbon\Carbon::parse($curso->data_inicio)->format('d/m/Y') }}</p>
            <p><strong>Data de Término:</strong> {{ \Carbon\Carbon::parse($curso->data_fim)->format('d/m/Y') }}</p>

            <div class="mt-3">
                <a href="{{ route('cursos.publicos') }}" class="btn btn-secondary mt-3">Voltar</a>
                <a href="{{ route('cursos.comprar', $curso->id) }}" class="btn btn-primary mt-3">Comprar Curso</a>


            </div>
        </div>
    </div>
@endsection
