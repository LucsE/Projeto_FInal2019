<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script type = 'text/javascript' src = "http://localhost/pjfinal_28_10_2019/jquery.js"></script>
    <script type = 'text/javascript' src = "http://localhost/pjfinal_28_10_2019/pesquisa_dinamica/pesquisa.js"></script>
</head>
<body>
<?php require_once('codigolabc303.php');
      require_once('../pesquisa_dinamica/pesquisa.php');
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Cefet_maps</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Departamentos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Laboratórios</a>
            <a class="dropdown-item" href="#">Salas de aula</a>
            <a class="dropdown-item" href="#">Administração</a>
            <a class="dropdown-item" href="#">Biblioteca e auditório</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Visão panorâmica</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Localização</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input id="btn_pesquisar" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>

 <div id="#tudo" class="ml-2 mr-2 altura">
<!-- Imagem de inicio-->
<div id="#inicio">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 " src="1.jpg" alt="Primeiro Slide">
          </div>
        </div>
      </div>

<!-- Título-->
</div>
<div>
<h2 class="text-center my-4"><?php echo $sala->nome;?></h2>
<hr>
</div>

<div id="#sobre">
    <div class="container ml-5 mx-auto">

        <div class="row">
            <div class="col-12 text-center my-3">
                <h3 class="text-center mb-3">Sobre o laboratório</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-5">
                <p><?php ?></p>
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                <p><?php echo $sala->descricao;?></p>
            </div>
        </div>
        <hr>
    </div>
</div>



</div>
</body>
</html>
