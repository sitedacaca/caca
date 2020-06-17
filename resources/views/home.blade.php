<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <link rel="icon" src="{{ asset('img/buterfly.png') }}">
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
            <div class="col col-md-6">
                <div class="col col-md-6">

                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{ asset('img/slide1.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p>iti</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('img/wod.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p>Quem diria...</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('img/bigode.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p>Cacá de bigode.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('img/classico_caca.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p>Patente da Cacá.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('img/we.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p>Que dia</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('img/caca_coelho.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p>Cacá coelho.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('img/caca.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p>Cacá S2.</p>
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
            </div>

            <div class="col col-md-6">
                <h2 style="font-family:courier;">Not so long ago</h2>
                <p style="font-family:courier;">Not so long ago <br>
                We against the world<br>
                Staring at each other's<br>
                Eyes, we were so lovers<br>
                <br>
                As crazy as it may seems<br>
                Oh God, it felt like dreams<br>
                Whenever i was down<br>
                We'd talk on the playground<br>
                <br>
                And all of sudden a feeling that made us feel so blue<br>
                And i will never forgive myself for not showing you the truth<br>
                Cause i never said<br>
                I love you<br>
                <br>
                repeat(2x)</p>
                <audio controls="controls" src="{{ asset('audio/song.mp3') }}">
                    Your browser does not support the HTML5 Audio element.  
                </audio>
                    
                
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
</html>