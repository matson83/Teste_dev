<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Edição Eletro App</title>
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
              <a class="nav-link" href="{{route('index')}}">Home </a>
            </li>
      </nav>
<main class="page-wrapper mt-4">
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">

            <div class="col-lg-12 pt-4 pb-2 pb-sm-4">
                <div class="d-flex align-items-center">
                    <H1>Edição do {{$eletro->name}}</H1>
                </div><br>

                <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">

                        <form action="/api/app/update/{{ $eletro->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 container">
                                <label class="form-label" for="user_id">Nome do Eletrodomestico:</label>
                                <input class="form-control" type="text" name="name" id="name" value="{{ $eletro->name}}">

                                <label class="form-label" for="titulo">Descrição:</label>
                                <input class="form-control" name="description" id="description" cols="15" rows="10" value="{{ $eletro->description}}">

                                <br>
                                <label class="form-label" for="image">Imagem:</label>
                                <input class="form-control-file" type="file" name="image" id="image" value="{{ $eletro->image}}"><br>
                                <img src="/img/eletros/{{ $eletro->image}}" alt="{{ $eletro->name}}" width="300px" height="300px">
                                <br>
                                <br>
                                <label class="form-label" for="regulation">Marca:</label>
                                <input class="form-control" type="text" name="marca" id="marca" value="{{ $eletro->marca}}">

                                <br>
                                <label class="form-label" for="comission">Tensão:</label>
                                <input class="form-control" type="text" name="tensaov" id="tensaov" value="{{ $eletro->tensaov}}">

                                <div class="col-12 d-flex justify-content-end pt-3">
                                    <button class="btn btn-primary ms-3" type="submit">Editar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
</body>
</html>
