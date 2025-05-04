<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'REALIZAR PAGAMENTO')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            display: flex;
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
            background-color:rgb(7, 128, 21);
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
