<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link href="/favicon.ico" rel="icon">

  <title>Proyectos</title>  

<link href="./main.3f6952e4.css" rel="stylesheet"></head>

<body class="">
<div id="site-border-left"></div>
<div id="site-border-right"></div>
<div id="site-border-top"></div>
<div id="site-border-bottom"></div>
 <!-- Add your content of header -->
<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Navegacion de Palanca</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav ">
          <li><a href="{{route('inicio')}}" title="">01 : Inicio</a></li>
          <li><a href="{{route('works')}}" title="">02 : Proyectos</a></li>
          <li><a href="{{route('about')}}" title="">03 : Sobre Mi</a></li>
          <li><a href="{{route('contact')}}" title="">04 : Contacto</a></li>
        </ul>


      </div> 
    </div>
  </nav>
</header>

<div class="section-container">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-8 col-sm-offset-2 section-container-spacer">
        <div class="text-center">
          <h1 class="h2">02 : Proyectos</h1>
          <p>A lo largo de un tiempo, Andrew Mathews a trabajado en diferentes proyectos musicales y presentado en diversos eventos de musica electronica. Ests son algunos de ellos.</p>
        </div>
      </div>

      <div class="col-md-12">
     
      <div id="myCarousel" class="carousel slide projects-carousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="col-sm-4">
                      <a href="{{route('work1')}}" title="" class="black-image-project-hover">
                        <img src="/images/Remixes1.png" alt="" class="img-responsive">
                      </a>
                      <div class="card-container card-container-lg">
                        <h4>001/006</h4>
                        <h3>REMIXES</h3>
                        <p>Remixes de las canciones Back When This Started, Reasons, Now I'm Just a Ghost, entre mucho mas.</p>
                        <a href="{{route('work1')}}" title="" class="btn btn-default">Mas...</a>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <a href="{{route('work2')}}" title="" class="black-image-project-hover">
                        <img src="/images/Eventos1.png" alt="" class="img-responsive">
                      </a>
                      <div class="card-container card-container-lg">
                        <h4>002/006</h4>
                        <h3>Eventos</h3>
                        <p>A lo largo de 2 años, presetaciones en eventos como Wishlow Festival, Summer Music, DTB, entre otros.</p>
                        <a href="{{route('work2')}}" title="" class="btn btn-default">Mas...</a>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <a href="{{route('work3')}}" title="" class="black-image-project-hover">
                        <img src="/images/Album1.png" alt="" class="img-responsive">
                      </a>
                      <div class="card-container card-container-lg">
                        <h4>003/006</h4>
                        <h3>Albúm</h3>
                        <p>"The Afterglow" el nuevo albúm de Andrew Mathews.</p>
                        <a href="{{route('work3')}}" title="" class="btn btn-default">Mas...</a>
                      </div>
                    </div>
                    
                </div>
                <!--/row-->
            </div>
            <!--/item-->
            <div class="item">
                <div class="row">



                  <div class="col-sm-4">
                    <a href="{{route('work4')}}" class="black-image-project-hover">
                      <img src="/images/Colab1.png" alt="Image" class="img-responsive">
                    </a>
                    <div class="card-container">
                      <h4>004/006</h4>
                      <h3>Colaboraciones</h3>
                      <p>Colaboraciones con Dea Midena, MowSher, RwdJackwd, Bv/ck y muchos más.</p>
                      <a href="{{route('work4')}}" class="btn btn-default">Mas...</a>
                    </div>
                  </div>




                   <div class="col-sm-4">
                      <a href="{{route('work5')}}" class="black-image-project-hover">
                        <img src="/images/Studio1.png" alt="Image" class="img-responsive">
                      </a>
                      <div class="card-container">
                        <h4>005/006</h4>
                        <h3>Studio</h3>
                        <p>¿Como es que A M crea sus producciones musicales?</p>
                        <a href="{{route('work5')}}" class="btn btn-default">Mas...</a>
                      </div>
                    </div>
                    



                    <div class="col-sm-4">
                      <a href="{{route('work6')}}" class="black-image-project-hover">
                        <img src="/images/Futuro1.png" alt="Image" class="img-responsive">
                      </a>
                      <div class="card-container">
                        <h4>006/006</h4>
                        <h3>Futuro...</h3>
                        <p>¿Cual es el futuro para Andrew Mathews en el mundo?</p>
                        <a href="{{route('work6')}}" class="btn btn-default">Mas...</a>
                      </div>
                    </div>
                    
                </div>
                <!--/row-->
            </div>
            
            <!--/item-->
        </div>
        <!--/carousel-inner--> 
        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">></a>
     </div>



    <!--/myCarousel-->
    </div>



    </div>
  </div>
</div>


<footer class="footer-container text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>© A:M | Pagina desarrollada por: Andrew Mathews</p>
      </div>
    </div>
  </div>
</footer>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     navActivePage();
  });
</script>


<script type="text/javascript" src="./main.70a66962.js"></script></body>

</html>