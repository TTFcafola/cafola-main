@extends('layouts.layout')

@section('conteudo')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
">
</head>
<body class="container">
    <a href="{{route('usuarios.create')}}">Adicionar usuário</a>
    <h1>Lista de usuários</h1>
    
    @foreach ($usuarios as $usuario)
        <p>{{$loop->iteration}}{{$usuario->name}} - <a class="btn btn-info" href="{{route('usuarios.show', $usuario->id)}}">Ver usuário</a></p>
    @endforeach
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <a href="{{ route('categoria.create') }}" class="btn btn-primary">Criar categoria</a>

</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
