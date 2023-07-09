<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Eletro App</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('index')}}">Eletro App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">

        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a class="nav-link" href="{{route('create')}}">Adicionar Eletrodomésticos</a>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="search" id="search" placeholder="Pesquisar" aria-label="Pesquisar">
          </form>
        </div>
      </nav>

        <br>
    <div id="lista-container" class="col-md-12">
        <h3 class="text-center">Segue os Eletrodomésticos Salvos</h3>
        <p class="text-center">Esses eletrodomésticos estão salvos em sequencia</p>

        <div id="cards-container" class="row">
            @foreach ($eletros as $eletro )
                <div class="card-col-md-3">

                    <img class="imgEletro" src="/img/eletros/{{$eletro->image}}" alt="{{$eletro->name}}">
                    <div class="card-body">
                        <h4 class="card-name">{{$eletro->name}}</h4>
                        <h5 class="card-description">{{$eletro->marca}}</h5>

                        <a href="/api/app/show/{{ $eletro->id}}" class="btn btn-primary bg-dark">Informações</a>

                    </div>
                </div>

            @endforeach
        </div>
    </div>
</body>
</html>

