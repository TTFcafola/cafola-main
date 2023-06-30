@extends('layouts.layout')

@section('conteudo')
    <h1>Lista de categorias</h1>
<br><br>
<div class="my-4">
    <a href="{{route('produto.create')}}" class="btn btn-primary">Adicionar</a>
</div>

  
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Id Categoria</th>
            <th scope="col">Detalhes</th>
            <th scope="col">Editar</th>
            <th scope="col">Apagar</th>    
          </tr>
        </thead>
        <tbody>
        @foreach ($produto as $produto)
          <tr>
            <td scope="row">{{$produto->id}}</td>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->preco}}</td>
            <td>{{$produto->categoria_id}}</td>
            <td>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Visualizar
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Informações</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    <div class="card">
                    <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="img-fluid">
                      <div class="card-body">
                        <ul class="list-group">
                          <li class="list-group-item">Nome: {{$produto->nome}}</li>
                          <li class="list-group-item">Preço: {{$produto->preco}}</li>
                          <li class="list-group-item">Id: {{$produto->id}}</li>
                          <li class="list-group-item">Id da categoria: {{ $produto->categoria_id }}</li>
                        </ul>
                      </div>
                    </div>                                   

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td><a href="{{route('produto.edit', $produto->id)}}" class="btn btn-warning">Editar</a></td>
            <td>
              <form action="{{route('produto.destroy', $produto->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
            </td>
          </tr>
          @endforeach  
        </tbody>

      </table>
     

    
    </li>  
   

  
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection