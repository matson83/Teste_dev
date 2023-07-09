<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Saber Mais</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Eletro App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('create')}}">Criar</a>
            </li>
          </ul>
        </div>
      </nav>

      <div>
        <ul class="list-group">
            <li class="list-group-item active">{{$eletro->name}}  #{{$eletro->id}}</li>
            <li class="list-group-item">{{$eletro->description}}</li>
            <li class="list-group-item">{{$eletro->marca}}</li>
            <li class="list-group-item">{{$eletro->image}}</li>
            <li class="list-group-item">{{$eletro->tensaov}}</li>

          </ul>
      </div>

      <div>
        <a href="" class="btn btn-primary">Editar</a>
        <form action="" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
        </form>

      </div>
</body>
</html>
