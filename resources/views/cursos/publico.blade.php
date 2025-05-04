@extends('layouts.curso')

@section('title', 'Cursos Disponíveis')

@section('content')
<div class="container mt-5">
    

    <div class="container mt-5">
    <h2 class="mb-4">Cursos Disponíveis</h2>
    <div class="row">
        <!-- Curso 1 -->
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('images/nr35.jpg') }}" class="card-img-top" alt="Trabalho em Altura">
                <div class="card-body">
                    <h3 class="card-title">Trabalho em Altura</h3>
                    <h5 class="card-text">Treinamento obrigatório para trabalhos acima de 2 metros.</h5>
                    <a href="{{ route('login') }}" class="btn btn-primary">Detalhe</a>
                </div>
            </div>
        </div>

        <!-- Curso 2 -->
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('images/brigada.jpg') }}" class="card-img-top" alt="Formação Brigada de Incêndio">
                <div class="card-body">
                    <h3 class="card-title">Brigada de Incêndio</h3>
                    <h5 class="card-text">Treinamento Formação de Brigadista de Incêndio.</h5>
                    <a href="{{ route('login') }}" class="btn btn-primary">Detalhe</a>
                </div>
            </div>
        </div>

        <!-- Curso 3 -->
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('images/cipa.png') }}" class="card-img-top" alt="Formação de CIPA">
                <div class="card-body">
                    <h3 class="card-title">CIPA</h3>
                    <h5 class="card-text">Formação de CIPA nova NR05.</h5>
                    <a href="{{ route('login') }}" class="btn btn-primary">Acessar curso</a>
                </div>
            </div>
        </div>
        <!-- Curso 4 -->
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('images/nr11.jpg') }}" class="card-img-top" alt="Transporte, Movimentação, Armazenagem e Manuseio de Materiais">
                <div class="card-body">
                    <h3 class="card-title">NR -11</h3>
                    <h5 class="card-text">Transporte, Movimentação, Armazenagem e Manuseio de Materiais.</h5>
                    <a href="{{ route('login') }}" class="btn btn-primary">Acessar curso</a>
                </div>
            </div>
        </div>
        <!-- Curso 5 -->
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('images/primeirosocorros.png') }}" class="card-img-top" alt="Primeiro Socorros">
                <div class="card-body">
                    <h3 class="card-title">Primeiro Socorros</h3>
                    <h5 class="card-text">tendimento Pré-Hospitalar (Primeiro Socorros.)</h5>
                    <a href="{{ route('login') }}" class="btn btn-primary">Acessar curso</a>
                </div>
            </div>
        </div>
         <!-- Curso 6 -->
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset('images/nr10.jpg') }}" class="card-img-top" alt="nr10">
                <div class="card-body">
                    <h3 class="card-title">Curso de NR-10 Básico</h3>
                    <h5 class="card-text">Segurança em Instalações e Serviços em Eletricidade</h5>
                    <a href="{{ route('login') }}" class="btn btn-primary">Acessar curso</a>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
@endsection
