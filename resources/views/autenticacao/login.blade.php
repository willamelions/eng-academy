@extends('layouts.curso')

@section('title', 'Login')

@section('content')
<div class="container-fluid vh-100">
    <div class="row h-100">
        <!-- Coluna da imagem -->
        <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center bg-success p-0">
            <img src="{{ asset('images/eng.jpg') }}" alt="Imagem Login" class="img-fluid w-100 h-100" style="object-fit: cover;">
        </div>

        <!-- Coluna do formulário -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="w-75">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/engbrasil.png') }}" alt="Logo Engemedical" style="max-height: 80px;">
                    
                    <p class="text-muted">Saúde e Segurança do Trabalho</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Login</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="ex.: login123" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Permanecer conectado</label>
                        <a href="#" class="float-end">Recuperar acesso</a>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Entrar na Conta</button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('cadastro') }}">Criar conta</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
