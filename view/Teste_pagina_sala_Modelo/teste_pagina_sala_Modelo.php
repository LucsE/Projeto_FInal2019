<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Script próprio de javascript-->
     <script type = "text/javascript" src = 'meujs.js'> </script>
     <script type = "text/javascript" src = 'vr.js'> </script>
     <!--CSS próprio-->
     <link rel="stylesheet" href="meustyle.css">
     <!--JQuery-->
     <script type = "text/javascript" src = 'jquery.js'> </script>
     <!--Outros links-->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
     <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <!--Script API javascript VR-->
     <script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>

     <title>Document</title>
</head>
<body>
<?php require_once('codigoteste.php');?>

    <!-- Navbar-->
<div id = 'nav' name ='nav'>
    <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">Logo</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
          </ul>
        </div>
      </nav>
    
      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
 <!-- Imagem de inicio-->
 <div id = 'img_inicio' name = 'img_inicio' class = 'container-fluid'> 
        <div id = 'linha_incicio' class = 'row'>
            <img class = "responsive-img" src = "1.jpg">
        </div>
    <div id='nome_da_sala' class = 'row'>
        <h2 class = 'center-align'><?php echo $sala->nome;?></h2>
    </div>
</div>
  <!--Descrição-->
<div id = 'descricao' class = 'container-fluid' style="background-color: #dcdcdf;">
  <div id = 'titulo_descricao' class='row col s12'>
      <h4 class="center-align">Um pouco sobre esta sala</h4>
  </div>
  <!--Colunas para texto-->
  <div class="row">
  <div class='col s12 m6'>
      <p class="center-align padding"><?php echo $sala->descricao;?></p>
  </div>

  <div class='col s12 m6'>
      <p class="center-align padding"><?php echo $sala->descricao;?></p>
  </div>
  </div>
</div>

  <!--Utilização da sala-->
<div style="background-color:#EAECE8; height: 25%;">
  <div id = 'utilizacao_da_sala' class = 'container-fluid' >
      <div id = 'titulo_utilizacao' class='row col s12'>
          <h4 class="center-align">Como e por quem é utilizada?</h4>
      </div>
      <div class="row">
      <div class='col s12 m6'>
          <p><?php echo $sala->responsavel;?></p>
      </div>
      <!--Div para carregamento imagem 360-->
      <div class="col s12 m6">
          <div id ='vrview' name='imagem_360'>
          </div>
      </div>
    </div>
  </div>
</div>
  <!--Carousel-->
  <div class='container-fluid'>
    <div class="row col s12">
      <h3 class="center-align">Conheça por dentro!</h3>
    </div>
      <div class="row" id = 'carousel'>
                  <section class="awSlider">
                      <div  class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target=".carousel" data-slide-to="0" class="active"></li>
                          <li data-target=".carousel" data-slide-to="1"></li>
                          <li data-target=".carousel" data-slide-to="2"></li>
                          <li data-target=".carousel" data-slide-to="3"></li>
                        </ol>
                    
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <div class="item active">
                            <img src="1.jpg">
                            <div class="carousel-caption">Texto #1</div>
                          </div>
                          <div class="item">
                            <img src="2.jpg">
                            <div class="carousel-caption">Texto #2</div>
                          </div>
                          <div class="item">
                            <img src="3.jpg">
                            <div class="carousel-caption">Texto #3</div>
                          </div>
                          <div class="item">
                            <img src="4.jpg">
                            <div class="carousel-caption">Texto #4</div>
                          </div>
                        </div>
                    
                        <!-- Controls -->
                        <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Texto</span>
                        </a>
                        <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Texto</span>
                        </a>
                      </div>
                    </section>
      </div>
    </div>

    <!--Localização-->
    <div class="container-fluid">
        <div class="row col s12">
     <h4 class="center-align">Como chego?</h4>
      <div class="row">
        <div class="col s12 m6 p-5 ">
            <p class="padding"><?php echo $sala->localizacao;?></p>

          <p class="padding"><?php echo $sala->localizacao;?></p>
        </div>
        <div class="col s12 m6 p-4" id='carrossel_localizacao'>
            <section class="awSlider">
                <div  class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target=".carousel" data-slide-to="0" class="active"></li>
                    <li data-target=".carousel" data-slide-to="1"></li>
                    <li data-target=".carousel" data-slide-to="2"></li>
                    <li data-target=".carousel" data-slide-to="3"></li>
                  </ol>
              
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="1.jpg">
                      <div class="carousel-caption">Texto</div>
                    </div>
                    <div class="item">
                      <img src="2.jpg">
                      <div class="carousel-caption">Texto #2</div>
                    </div>
                    <div class="item">
                      <img src="3.jpg">
                      <div class="carousel-caption">Texto #3</div>
                    </div>
                    <div class="item">
                      <img src="4.jpg">
                      <div class="carousel-caption">Texto #4</div>
                    </div>
                  </div>
              
                  <!-- Controls -->
                  <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Geri</span>
                  </a>
                  <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">İleri</span>
                  </a>
                </div>
              </section>
        </div>
      </div>
    </div>

    <!--Rodapé-->
    <div class="content">
      </div>
      <footer id="myFooter">
          <div class="container">
              <ul>
                  <li><a href="#">Início</a></li>
                  <li><a href="#">Sobre o Cefet</a></li>
                  <li><a href="#">Departamnetos</a></li>
                  <li><a href="#">Um pouco de história</a></li>
              </ul>
              <p class="footer-copyright">© 2019 Copyright - CefetMaps</p>
          </div>
          <div class="footer-social">
              <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
              <a href="#" class="social-icons"><i class="fa fa-instagram"></i></a>
              <a href="#" class="social-icons"><i class="fa fa-youtube"></i></a>
              <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
          </div>
      </footer>
 
</body>
</html>



