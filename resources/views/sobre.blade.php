@extends('layouts.curso')

@section('content')
<div class="container mt-5">
    <div class="row align-items-center">
        <!-- Texto à esquerda -->
        <div class="col-md-7">
            <h2 class="text-primary font-weight-bold">QUEM SOMOS</h2>
            <p>
                Somos agentes de transformação que desafiam a zona de conforto. Com uma atuação robusta em todo o Brasil, combinamos uma estrutura própria e uma vasta rede de credenciados para oferecer soluções personalizadas, ágeis e eficientes.
            </p>
            <p>
                Nosso foco é proporcionar os mais altos padrões de qualidade e gestão, pois <strong>sabemos que o sucesso de uma empresa começa com a proteção do seu maior ativo: as pessoas.</strong>
            </p>
            <p>
                Trabalhamos para garantir que cada trabalhador esteja em um ambiente seguro, saudável e pronto para alcançar seu máximo potencial, ao mesmo tempo em que <strong>resguardamos os interesses de nossos parceiros, assegurando a conformidade legal com as regulamentações vigentes no país.</strong>
            </p>
            <p>
                Com orgulho, estamos entre as maiores empresas do país, resultado da nossa paixão e comprometimento em transformar realidades.
            </p>
        </div>

        <!-- Imagem à direita -->
        <div class="col-md-5 text-center">
            <img src="{{ asset('images/instrutor.png') }}" class="img-fluid rounded shadow" alt="Instrutor Técnico">
        </div>
    </div>
</div>
@endsection
