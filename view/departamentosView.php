<!DOCTYPE html>
<html lang="en">
<head>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<style>
.cor{
    background-color: #696969;
    padding:20px;
}
.color{
    background-color: #3e5f8a;
}
</style>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
</head>
<body>
<?php 
    //include('/controller/SalaController.php');
    include("SalaController.php");
    //$sala = new SalaController();
?>
<nav>
    <div class="nav-wrapper color">
      <a href="#!" class="brand-logo">CefetMaps</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons left">Objetivo</i></a></li>
        <li><a href="badges.html"><i class="material-icons right">Cursos</i></a></li>
      </ul>
    </div>
  </nav>
  <div id="corpo" class="container ">

<div class="row">
    <div id="titulo" class="col s12 "><h1>Laboratórios</h1></div>
    <div id="coluna1" class="col s6 ">
    <!-- Card1 -->
    <div class="card" id="card1">
            <div class="card-image">
                <img src="<?php $sala = new SalaController();echo $sala->getVista_frontal1("C201");?>">
                <span class="card-title">Card Title</span>
            </div>
   
        <div class="card-content">
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
        <a href="#">Ir para a sala</a>
        </div>
    </div>
<!--------------------------------------------------------------------------------->
<!-- Card2 -->
<div class="card" id="card2">
            <div class="card-image">
                <img src="<?php $sala = new SalaController();$sala->getVista_frontal1("C301");?>">
                <span class="card-title">Card Title</span>
            </div>
             <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
            </div>
        <div class="card-action">
            <a href="#">Ir para a sala</a>
        </div>
</div>
<!--------------------------------------------------------------------------------->
</div>
    
    <div id="coluna2" class="col s6 ">
        <!-- Card3 -->
        <div class="card" id="card1">
            <div class="card-image">
                <img src="<?php $sala = new SalaController();$sala->getVista_frontal1("C303");?>">
                <span class="card-title">Card Title</span>
            </div>
<div class="card-content">
  <p>I am a very simple card. I am good at containing small bits of information.
  I am convenient because I require little markup to use effectively.</p>
</div>
<div class="card-action">
  <a href="#">Ir para a sala</a>
</div>
<!--------------------------------------------------------------------------------->
<!-- Card4 -->
<div class="card" id="card4">
            <div class="card-image">
                <img src="<?php $sala = new SalaController();$sala->getVista_frontal1("C307");?>">
                <span class="card-title">Card Title</span>
            </div>
<div class="card-content">
  <p>I am a very simple card. I am good at containing small bits of information.
  I am convenient because I require little markup to use effectively.</p>
</div>
<div class="card-action">
  <a href="#">Ir para a sala</a>
</div>
<!--------------------------------------------------------------------------------->

    </div>
</div>

</div>
</body>
</html>
