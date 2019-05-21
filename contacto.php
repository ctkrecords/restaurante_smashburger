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
              <a class="nav-link" href="sucursales.php">SUCURSALES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACTO</a>
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
      <h1 style="text-align: center;"><b>Contacto</b></h1>
      <h4>Si deseas hacer una reservación, por favor completa los siguientes campos: </h4>
      <hr>
    </div>
   </div>
 </div>


<div class="container">
  <div class="row">
    <div class="col">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
        <table class="table table-borderless table-dark">
          <tr><td></td><td></td></tr>
          <tr>
            <div class="form-group">
              <td class="td_"><ion-icon name="person" size="large"></ion-icon></td>
              <td><input type="text" name="nombre" class="form-control" placeholder="Nombre" required="true"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td class="td_"><ion-icon name="person" size="large"></ion-icon></td>
              <td> <input type="text" name="apellido" placeholder="Apellido" class="form-control" required="true"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td class="td_"><ion-icon name="mail" size="large"></ion-icon></td>
              <td> <input type="email" name="correo" placeholder="Correo electrónico" class="form-control" required="true"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td class="td_"><ion-icon name="call" size="large"></ion-icon></td>
              <td><input type="text" name="telefono" placeholder="Teléfono de contacto" class="form-control" required="true"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td class="td_"><ion-icon name="chatbubbles" size="large"></ion-icon></td>
              <td><textarea class="form-control" rows="4" name="mensaje" placeholder="Tú mensaje o comentario" required="true"></textarea></td>
            </div>
          </tr>
          <tr>
            <td></td>
            <td>
              <div class="custom-control custom-checkbox mb-3">
                <input class="custom-control-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="custom-control-label" for="invalidCheck">Aceptar términos y condiciones</label>
              </div>
            </td>
          </tr>
        </table>
        <div style="text-align: center;">
          <input type="submit" name="enviar" value="Envíar" class="btn btn-dark btn_per">
<?php 
$respuesta = "";

function vaciarCampos(){
    $nombre = "";
    $apellido = "";
    $correo = "";
    $telefono = "";
    $mensaje = "";
}

  if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    if(($nombre!="")&&($apellido!="")&&($correo!="")&&($telefono!="")&&($mensaje!="")){
      $destinatario = "ctkrecordings@gmail.com";
      $asunto = "Contacto restaurante";

      $carta = "De: $nombre $apellido\n";
      $carta .= "Correo: $correo\n";
      $carta .= "Telefóno: $telefono\n";
      $carta .= "Mensaje: $mensaje";

      $respuesta = "";
      if(mail($destinatario, $asunto, $carta)){
        $respuesta = "Su mensaje fue enviado con éxito!";
        vaciarCampos();
      }else{
        $respuesta = "Su mensaje no pudo ser enviado, por favor intente más tarde.";
        vaciarCampos();
      }
    }
  }
  
?>

        </div>
      </form>
    </div>
  </div>
  <div><p><?php echo $respuesta; ?></p></div>
</div>
<br>
<script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
</body>
</html>