<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Adicionar produto</title>
    <style>
        label {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header">
            <h1 class="text-center">Adicionar novo produto</h1>
            </div>
            <div class="card-body">
    <form action="{{route('produto.update', $produto->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
 

            <div class="mb-3">
            <label for="categoria_id">Categoria:</label>
            <select name="categoria_id" id="categoria_id" class="form-select">
            <option></option>
        @foreach ($categoria as $cate)
            <option value="{{$cate->id}}">{{ $cate->nome }}</option>
        @endforeach
            </select></div>

            <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{$produto->nome}}">
            </div>

            <div class="mb-3">
            <label for="imagem" class="form-label">Imagem:</label>
            <input type="file" id="imagem" name="imagem" class="form-control" value="{{$produto->imagem}}">
            </div>

            <div class="mb-3">
            <label for="preco" class="form-label">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" class="form-control" value="{{$produto->preco}}">
            </div>

            <div class="text-center">
            <button class="btn btn-primary" type="submit">Enviar</button>
            <a class="btn btn-secondary" href="{{route('produto.index')}}">Voltar</a>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
