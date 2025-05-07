@extends('layouts.curso')

@section('title', 'Cursos Disponíveis')

@section('content')


<div class="container mt-5">
    <h2 class="mb-4">Meus Cursos</h2>
    <div class="row">
        @foreach($cursos as $curso)
            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{ asset('images/' . $curso->imagem) }}" class="card-img-top" alt="{{ $curso->titulo }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $curso->titulo }}</h5>
                        <p class="card-text">{{ $curso->descricao }}</p>
                        <a href="{{ route('cursos.comprar', $curso->id) }}" class="btn btn-primary mt-auto">Acessar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="container mt-5">
    <h2 class="mb-4">Cursos Disponiveis</h2>
    <div class="row">
        @foreach($cursos as $curso)
            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{ asset('images/' . $curso->imagem) }}" class="card-img-top" alt="{{ $curso->titulo }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $curso->titulo }}</h5>
                        <p class="card-text">{{ $curso->descricao }}</p>
                        <a href="{{ route('cursos.comprar', $curso->id) }}" class="btn btn-primary mt-auto">Comprar Curso</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
