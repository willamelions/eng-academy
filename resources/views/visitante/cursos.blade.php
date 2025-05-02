@extends('layouts.curso')


@section('content')
<div class="container-fluid bg-dark text-white p-5">
    <div class="row">
        <div class="col-md-8">
            <h2>Animação de Eclipse Solar | Projeto...</h2>
            <p>Neste curso, você criará uma animação incrível de "Eclipse Solar"... </p>
            <a href="#" class="btn btn-primary">INICIAR CURSO</a>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h4>Continue seu progresso</h4>
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('images/brigada.jpg') }}" class="card-img-top" alt="BRIGADA DE INCÊNDIO">
                <div class="card-body">
                    <h5 class="card-title">Formação Brigada de Incêndio</h5>
                    <p class="card-text">Equipe Engemedical</p>
                </div>
            </div>
        </div>
    </div>

    <h4>Treinamentos disponíveis</h4>
    <div class="row">
        <!-- Card: Trabalho em Altura -->
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/nr35.jpg') }}" class="card-img-top" alt="Trabalho em Altura">
                <div class="card-body">
                    <h5 class="card-title">Trabalho em Altura</h5>
                    <p class="card-text">Treinamento essencial para atividades acima de 2 metros.</p>
                    <a href="#" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>

        <!-- Card: CIPA -->
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/cipa.png') }}" class="card-img-top" alt="CIPA">
                <div class="card-body">
                    <h5 class="card-title">CIPA</h5>
                    <p class="card-text">Comissão Interna de Prevenção de Acidentes para segurança no trabalho.</p>
                    <a href="#" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>

        <!-- Card: Brigada de Incêndio -->
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/brigada.jpg') }}" class="card-img-top" alt="Brigada de Incêndio">
                <div class="card-body">
                    <h5 class="card-title">Brigada de Incêndio</h5>
                    <p class="card-text">Aprenda a agir corretamente em caso de incêndios.</p>
                    <a href="#" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>

        <!-- Card: Primeiros Socorros -->
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/primeirosocorros.png') }}" class="card-img-top" alt="Primeiros Socorros">
                <div class="card-body">
                    <h5 class="card-title">Primeiros Socorros</h5>
                    <p class="card-text">Aprenda como agir em emergências médicas até a chegada do socorro.</p>
                    <a href="#" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>

        <!-- Card: Transporte Manual de Cargas -->
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/nr11.jpg') }}" class="card-img-top" alt="Transporte Manual de Cargas">
                <div class="card-body">
                    <h5 class="card-title">Transporte Manual de Cargas</h5>
                    <p class="card-text">Evite lesões com técnicas corretas de levantamento e transporte de peso.</p>
                    <a href="#" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
    </div>

        
    </div>
</div>
@endsection
