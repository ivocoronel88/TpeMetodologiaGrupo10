<!DOCTYPE html>
<html lang="en">

  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Boceto Home</title> 
  <base href="{BASE_URL}">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
  integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
  crossorigin=""></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
  <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
  
  
  </head>

<body>
    <!-- BARRA DE NAVEGACIÓn -->
    <nav class="navbar navbar-expand-md bg-green navbar-light">

        <img class="imgnav" src="img\58568a5b4f6ae202fedf2713.png">
        <a class="navbar-brand" href="home"><h1 class="navtitle">Recoop</h1></a>
        <div class="container">

                {if $userLogin}
                    <h4 class="hiuser">Bienvenido, {$userLogin}</h4>
                {/if}

        </div>
        <!-- Navbar links -->
        <div class="container d-flex flex-row-reverse">
        <ul class="navbar-nav">
        {if $userLogin}
            <li class="nav-item">
            <button type="button" class="botonEstilo btnColor3"> <a href="Logout" class="text-white show-decoration-none"> Cerrar sesión</a></button>
            </li>
        {else}
            <li class="nav-item">
                <button type="button" class="botonEstilo btnlog"> <a href="Login" class="text-white show-decoration-none"> Ingresar</a></button>
            </li>
        {/if}


            </ul>
        </div>
    </nav>
 
  <nav class="navbar navbar-expand-lg navbar-dark nav-bk2">
    
    <ul class="navbar-nav">

      <li  class="nav-item">
        <a class="nav-link text-light" href="SolicitarMateriales">Solicitar retiros de materiales</a>
      </li>
      <li  class="nav-item">
        <a class="nav-link text-light" href="MaterialesyEntrega">Materiales y forma de entrega</a>
      </li>
      <li  class="nav-item">
        <a  class="nav-link text-light" href="CarteleraVirtual">Cartelera virtual</a>
      </li>
      {if $userLogin}
        <li  class="nav-item">
          <a class="nav-link text-light"  href="user">Seccion Secretaria</a>
        </li>
      {/if}
      
     
    </ul>

  </nav>