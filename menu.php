<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Restaurante</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="estiloRestaurante.css">
</head>
<body>

<header class="fondo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 justify-content-lg-center padding_col">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-lg-center justify-content-md-center justify-content-sm-center" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">MENÚ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="promociones.php">PROMOCIONES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sucursales.php">SUCURSALES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.php">CONTACTO</a>
            </li>
          </ul>
        </div> 
      </nav>
    </div>
      <div class="col-xl-3 col-lg-3 col-md-8 col-sm-4 text-center">
        <a href="index.php"><img src="logo.png" height="80" width="180"></a>
      </div>
  </div>
</div>
</header>

<div class="container-fluid">
  <div class="row">
    <div class="col no-padding">
      <h1 style="text-align: center; "><b>Nuestras hamburguesas</b></h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row reducido">
    <div class="col">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="classicsmash.jpg" alt="Classic Smash" width="70%">
            <div class="carousel-caption d-md-block">
              <p class="p-caption">Classic Smash</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="mushroom.jpg" alt="Mushroom Swiss" width="70%">
            <div class="carousel-caption d-md-block">
              <p class="p-caption">Mushroom Swiss</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="avocado2.jpg" alt="Avocado Club" width="70%">
            <div class="carousel-caption d-md-block">
              <p class="p-caption">Avocado Club</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="buffalo.jpg" alt="Buffalo" width="70%">
            <div class="carousel-caption d-md-block">
              <p class="p-caption">Buffalo</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="creacion.jpg" alt="Creación salvadoreña" width="70%">
            <div class="carousel-caption d-md-block">
              <p class="p-caption">Creación salvadoreña</p>
            </div>
          </div>
        </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
    </div>
  </div><br>

  <div class="row"> 
    <div class="col punteado-fondo">
      <h3 style="text-align: center;"><b>Classic Smash</b></h3>
      <p>Carne 100% Angus, acompañada de queso Americano, ketchup, salsa SMASH, tomate, lechuga, pepinillos y cebolla. Servida en Classic Egg Bun.</p>
      <table class="table table-striped" style="text-align: center;">
        <tr>
          <th scope="col">Regular</th>
          <th scope="col">Agrandada</th>
        </tr>
        <tr>
          <td>$6.50</td>
          <td>$1.50</td>
        </tr>
      </table>
    </div>
  </div><br>
  <div class="row"> 
    <div class="col punteado-fondo">
      <h3 style="text-align: center;"><b>Mushroom Swiss</b></h3>
      <p>Carne 100% Angus, acompañada de hongos salteados, queso Suizo y mayonesa. Servida en Classic Egg Bun.</p>
      <table class="table table-striped" style="text-align: center;">
        <tr>
          <th scope="col">Regular</th>
          <th scope="col">Agrandada</th>
        </tr>
        <tr>
          <td>$5.50</td>
          <td>$1.25</td>
        </tr>
      </table>
    </div>
  </div><br>
  <div class="row"> 
    <div class="col punteado-fondo">
      <h3 style="text-align: center;"><b>Avocado Club</b></h3>
      <p>Carne 100% Angus, acompañada de aguacate, tocino ahumado, lechuga, tomate, aderezo ranch y mayonesa. Servida en Multigrain Bun.</p>
      <table class="table table-striped" style="text-align: center;">
        <tr>
          <th scope="col">Regular</th>
          <th scope="col">Agrandada</th>
        </tr>
        <tr>
          <td>$7.50</td>
          <td>$1.50</td>
        </tr>
      </table>
    </div>
  </div><br>
  <div class="row"> 
    <div class="col punteado-fondo">
      <h3 style="text-align: center;"><b>Buffalo</b></h3>
      <p>Carne 100% Angus, combinada con Blue Chesee, acompañado de lechuga, tomate, salsa BUFFALO FRANK'S REDHOT y mayonesa. Servida en Classic Egg Bun.</p>
      <table class="table table-striped" style="text-align: center;">
        <tr>
          <th scope="col">Regular</th>
          <th scope="col">Agrandada</th>
        </tr>
        <tr>
          <td>$6.00</td>
          <td>$1.50</td>
        </tr>
      </table>
    </div>
  </div><br>
  <div class="row"> 
    <div class="col punteado-fondo">
      <h3 style="text-align: center;"><b>Creación salvadoreña</b></h3>
      <p>Carne 100% Angus, acompañada de jalapeños, guacamole, queso Pepper Jack, lechuga, tomate, cebolla morada y mayonesa Chipotle. Servida en Classic Egg Bun.</p>
      <table class="table table-striped" style="text-align: center;">
        <tr>
          <th scope="col">Regular</th>
          <th scope="col">Agrandada</th>
        </tr>
        <tr>
          <td>$5.50</td>
          <td>$1.25</td>
        </tr>
      </table>
    </div>
  </div><br>
  <div class="row"> 
    <div class="col">
      <h3 style="text-align: center;"><b>Las Vegas</b></h3>
      <p>Carne 100% Angus, queso Americano, cebolla salteada, huevo frito, aros de cebolla haystacks, tocino ahumado y salsa Smash. Servida en Classic Egg Bun.</p>
      <table class="table table-striped" style="text-align: center;">
        <tr>
          <th scope="col">Regular</th>
          <th scope="col">Agrandada</th>
        </tr>
        <tr>
          <td>$6.25</td>
          <td>$1.50</td>
        </tr>
      </table>
    </div>
  </div>
</div>
<br>

</body>
</html>