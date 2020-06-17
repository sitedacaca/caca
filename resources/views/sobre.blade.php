<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Cacazinha</title>
  </head>
  <body>
    <div style="height: 850px;background-image:url('{{ asset('img/background.jpg') }}');position:relative">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent" >
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/buterfly.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Papillon
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    
    <div class="container">
        <div class="row">
        <div class="col col-md-3">
        </div>
            <div class="col col-md-3">
                    <div class="card">
                        <img src="{{ asset('img/caca2.jpg') }}" class="d-block w-100">
                        <p class="card-body">Esta é a querida Caca. Este site foi feito para ela 
                            por esse príncipe aí do lado. A Caca é tudo de bom! Além de linda (oxe) 
                            ela é a melhor pessoa para conversar! A gente rir de tudo quando ta junto.
                        </p>
                    </div>
            </div>

                <div class ='col col-md-3'>
                    <div class="card">
                        <img src="{{ asset('img/leo.jpg') }}" class="d-block w-100" alt="...">
                        <p class="card-body">Esse é o príncipe apaixonado. Ele já esteve junto dessa príncipa
                            ao lado mas não demonstrou seu amor como deveria (claramente não é a pessoa
                            mais inteligente desse mundo). Mas agora está fazendo o que pode para a ter 
                            de volta. <p>
                    </div>
                </div>
                <div class="col col-md-3">
                </div>
            </div>
        </div>
    </div>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
  <script>
        var x = document.getElementById("myAudio"); 

        function playAudio() { 
        x.play(); 
        } 

        function pauseAudio() { 
        x.pause(); 
  </script>
</html>