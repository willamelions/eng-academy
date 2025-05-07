<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Login')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .login-container {
            display: flex;
            height: 100vh;
            width: 100vw;
        }

        .left-side {
            flex: 1;
            background-image: url('{{ asset('images/eng.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .right-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-wrapper {
            width: 90%;
            max-width: 500px; /* aumente conforme necessário */
        }
    </style>
</head>
<body>

    <div class="login-container">
        <!-- Lado esquerdo com imagem como background -->
        <div class="left-side d-none d-md-block"></div>

        <!-- Lado direito com o conteúdo (formulário) -->
        <div class="right-side">
            <div class="form-wrapper">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>
