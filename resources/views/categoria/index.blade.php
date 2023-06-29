@extends('layouts.layout')

@section('conteudo')
    <h1>Lista de categorias</h1>
<br><br>
<div class="my-4">
    <a href="{{route('categoria.create')}}" class="btn btn-primary">Adicionar</a>
</div>

    @foreach ($categoria as $cate)
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">imagem</th>
            <th scope="col">Detalhes</th>
            <th scope="col">Editar</th>
            <th scope="col">Apagar</th>    
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$cate->id}}</td>
            <td>{{$cate->nome}}</td>
            <td>{{$cate->imagm}}</td>
            <td> <a href="{{route('categoria.show', $cate->id)}}" class="btn btn-info">Ver</a></td>
            <td><a href="{{route('categoria.edit', $cate->id)}}" class="btn btn-warning">Editar</a></td>
            <td>
              <form action="{{route('categoria.destroy', $cate->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
            </td>
          </tr>
        </tbody>

      </table>
     

    
    </li>  
    @endforeach  

  
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection