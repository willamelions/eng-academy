@php $ocultar_menu = true; @endphp
@extends('layouts.visitante')

@section('title', 'Pagamento do Curso')

@section('content')
<div class="container mt-5">
    <h2>Pagamento - {{ $curso->titulo }}</h2>

    <div class="card mt-3">
        <div class="card-body">
            <form action="{{ route('cursos.processarPagamento', $curso->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="metodo_pagamento" class="form-label">Método de Pagamento</label>
                    <select class="form-select" name="metodo_pagamento" id="metodo_pagamento" required>
                        <option value="cartao">Cartão de Crédito</option>
                        <option value="pix">PIX</option>
                        <option value="boleto">Boleto</option>
                    </select>
                </div>

                {{-- CARTÃO --}}
                <div id="cartaoFields">
                    <div class="mb-3">
                        <label class="form-label">Nome no Cartão</label>
                        <input type="text" class="form-control" name="nome_cartao">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Número do Cartão</label>
                        <input type="text" class="form-control" name="numero_cartao">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Validade</label>
                        <input type="text" class="form-control" name="validade" placeholder="MM/AA">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CVV</label>
                        <input type="text" class="form-control" name="cvv">
                    </div>
                </div>

                {{-- PIX --}}
                <div id="pixFields" style="display:none;">
                    <div class="alert alert-success">
                        <strong>Chave PIX:</strong> pagamentos@plataforma.com.br <br>
                        <img src="{{ asset('images/qrcode_pix.png') }}" alt="QR Code PIX" width="150">
                    </div>
                </div>

                {{-- BOLETO --}}
                <div id="boletoFields" style="display:none;">
                    <div class="alert alert-info">
                        <p><strong>Boleto gerado:</strong> 00190.00009 01234.567891 23456.789123 4 56780000012345</p>
                        <a href="{{ route('boleto.pdf') }}" target="_blank" class="btn btn-outline-primary">Baixar Boleto em PDF</a>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-3">Confirmar Pagamento</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Cancelar</a>
            </form>
        </div>
    </div>
</div>

<script>
document.getElementById('metodo_pagamento').addEventListener('change', function () {
    const metodo = this.value;

    document.getElementById('cartaoFields').style.display = metodo === 'cartao' ? 'block' : 'none';
    document.getElementById('pixFields').style.display = metodo === 'pix' ? 'block' : 'none';
    document.getElementById('boletoFields').style.display = metodo === 'boleto' ? 'block' : 'none';
});
</script>
@endsection
