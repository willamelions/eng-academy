@extends('layouts.curso')

@section('title', 'Cadastro')

@section('content')
<div class="container mt-5">
    <h2>Criar Conta</h2>
    <form method="POST" action="{{ route('cadastro.salvar') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
        <a href="{{ route('login') }}" class="btn btn-link">Já tenho conta</a>
    </form>
</div>
@endsection
