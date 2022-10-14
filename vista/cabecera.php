<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="sweetalert2.min.js"></script>
    <script src="https://kit.fontawesome.com/1a3d6caaee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="estilos/style.css">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/e1187442ed.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark " style= " bacbackground: rgb(39,149,190);
background: radial-gradient(circle, rgba(39,149,190,1) 6%, rgba(129,224,195,1) 24%, rgba(14,246,162,1) 39%, rgba(86,212,222,1) 53%, rgba(66,165,171,1) 71%, rgba(59,140,198,1) 82%, rgba(51,147,131,1) 95%);">
  <a class="navbar-brand" href="#">SISOS HELP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"> 
    
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="color:white; "> Registro Incidente </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tablareporte.php" style="color:white; "> Tabla </a>
      </li>
      
    </ul>
    <nav class="navbar navbar-expand-sm bg-INFO navbar-dark">
  <form class="form-inline" action="tabla.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
    <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
</nav>
</div>
</nav>
