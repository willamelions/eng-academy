@extends('layouts.curso')

@section('content')
<div class="container-fluid p-5" style="background-color: #ffffff; color: #006182;">


    <div class="row">
        <div class="col-md-8">
            <h1>Plataforma de Cursos Engemedical</h1>
            <h4>Cursos de Capacitação e Reciclagem!</h4>
        </div>
    </div>
</div>

<div class="container mt-4">
    <p>Descubra cursos que realmente fazem a diferença na sua carreira.
    Clique em "Detalhes" e veja como a PLATAFORMA pode te levar além com conteúdo de qualidade, certificado válido e 
    aplicabilidade real no mercado.</p>

    <h5>Invista em você. Cresça com quem entende de capacitação profissional.</h5>
    <br><br>

    <div class="row">
        @forelse($cursos as $curso)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    @if($curso->imagem)
                    <img src="{{ asset('images/' . $curso->imagem) }}" class="card-img-top" alt="{{ $curso->titulo }}">
                    @else
                        <img src="{{ asset('images/sem-imagem.png') }}" class="card-img-top" alt="Sem imagem">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $curso->titulo }}</h5>
                        <p class="card-text">{{ Str::limit($curso->descricao, 100) }}</p>
                        <a href="{{ route('cursos.detalhes', $curso->id) }}" class="btn btn-primary">Detalhe do Curso</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Nenhum curso disponível no momento.</p>
        @endforelse
    </div>
</div>
@endsection
