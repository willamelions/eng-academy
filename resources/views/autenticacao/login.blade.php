@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="w-100 px-5" style="max-width: 600px;">
    <div class="text-center mb-4">
        <img src="{{ asset('images/engbrasil.png') }}" alt="Logo Engemedical" style="max-height: 100px;">
        <h2 class="text-muted">PORTAL ENGEMEDICAL</h2>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Login</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="login" required autofocus>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="senha" required>
        </div>

        <div class="mb-3 d-flex justify-content-between flex-column flex-sm-row">
            <div>
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Permanecer conectado</label>
            </div>
            <div class="text-end mt-2 mt-sm-0">
                <a href="{{ route('cadastro') }}">Criar conta</a><br>
                <a href="{{ route('cadastro') }}">Recuperar acesso</a>
            </div>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Entrar na Conta</button>
        </div>

        <div class="mt-3 text-center">
            <a href="{{ route('login.google') }}" class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center gap-2">
                <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo" width="20" height="20">
                Entrar com Google
            </a>
        </div>
    </form>
</div>
@endsection
