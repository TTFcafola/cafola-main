<!DOCTYPE html>
<html>
<head>
    <title>Loja de Tênis</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top mx-auto">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="shaq.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('categoria.index')}}">Categoria</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('produto.index')}}">Produtos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <main class="container">
        @yield('conteudo')
    </main>

    <script>
        $(document).ready(function() {
            $('.navbar-toggler').on('click', function() {
                $('.navbar-collapse').toggleClass('slide-in');
                $('.side-body').toggleClass('body-slide-in');
            });
        });
    </script>
</body>
</html>

