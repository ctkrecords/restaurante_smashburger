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
              <a class="nav-link" href="menu.php">MENÚ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="promociones.php">PROMOCIONES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SUCURSALES</a>
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
      <h1 style="text-align: center;"><b>Sucursales</b></h1>
      <h4>Encuéntranos en Plaza Madero o Torre Futura</h4>
      <h4 style="color: red"><b>SUGERENCIAS: 2206-7000</b></h4>
      <hr>
    </div>
  </div>
</div>

<div class="container">  
  <div class="row">

    <div class="col-6">
      <h5 style="text-align: center;">Plaza Madero</h5><br>
      <img src="madero.jpg" class="img-fluid">
      <hr>
      <div name="primerModal">
      <!-- Botón del primer modal -->
      <div style="text-align: center;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalMadero">Más información</button></div>
      <!-- Modal -->
      <div class="modal fade" id="modalMadero" tabindex="-1" role="dialog" aria-labelledby="horariosMadero" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="horariosMadero">Plaza Madero</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><b>Horarios:</b></p>
              <p>Lunes-Viernes: 12:00 md. a 10:00 pm.</p>
              <p>Sábado: 7:00 am. a 10:00 pm.</p>
              <p>Domingo: 7:00 am. a 9:00 pm.</p>
              <hr>
              <p><b>Tel: 2562-9156​</b></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div><!--  Cierre de la primera columna-->

    <div class="col-6">
     <h5 style="text-align: center;">Torre Futura</h5><br>
     <img src="torre.jpeg" class="img-fluid">
     <hr>
      <div name="segundoModal">
      <!-- Botón del primer modal -->
      <div style="text-align: center;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTorre">Más información</button></div>
      <!-- Modal -->
      <div class="modal fade" id="modalTorre" tabindex="-1" role="dialog" aria-labelledby="horariosFutura" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="horariosFutura">Torre Futura</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <b><p>Horarios:</p></b>
              <p>Lunes-Jueves:12:00 md. a 2:30 pm y de, 5:30 pm. a 10:00 pm.</p>
              <p>Sábado de 12:00 md. a 10:00 pm.</p>
              <p>Domingo de 12:00 md. a 9:00 pm.</p>
              <hr>
              <p><b>Tel: 2557 - 1717​</b></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      </div>
  </div><!--Cierre del  segundo col-->

  </div><!-- Cierre de la fila -->
</div>
<br>

</body>
</html>