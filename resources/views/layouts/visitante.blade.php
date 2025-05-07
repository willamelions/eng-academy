<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'REALIZAR PAGAMENTO')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            /* display: flex;  ⛔ REMOVER isso */
            min-height: 100vh;
            margin: 0;
        }
        .sidebar {
            width: 220px;
            background-color: #1c1c1c;
            color: #fff;
            flex-shrink: 0;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 15px;
            display: block;
        }
        .sidebar a:hover {
            background-color:rgb(52, 64, 53);
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            background-color:rgb(247, 247, 247);
        }
        .header {
            background-color:rgb(255, 255, 255);
            padding: 10px 20px;
            border-bottom: 1px solid #ccc;
        }
        .logo {
            height: 200px;
        }
        
    </style>
</head>
<body>

        <!-- layouts/visitante.blade.php ou layouts/app.blade.php -->
        @if (empty($ocultar_menu))
        <header class="navbar navbar-expand-lg bg-white shadow-sm py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src="{{ asset('images/logo-engemedical.png') }}" alt="Logo" style="height: 40px;">
                    <span class="ms-2 fw-bold text-success">ENGEMEDICAL</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/sobre">A Engemedical</a></li>
                        <li class="nav-item"><a class="nav-link" href="/servicos">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="/cursos">Cursos</a></li>
                        <li class="nav-item"><a class="btn btn-success text-white ms-3" href="{{ route('login') }}">Área do Cliente</a></li>
                    </ul>
                </div>
            </div>
        </header>
        @endif


    

    <div class="content">
        <div class="header d-flex justify-content-between align-items-center">
            <h4>@yield('page_title', 'PAGAMENTO')</h4>
        </div>

        <div class="mt-3">
            @yield('content')
        </div>
    </div>

</body>
</html>
