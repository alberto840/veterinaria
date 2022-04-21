<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/contactos.css">
    <title>SHOW TICKET</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="57" style="background-color: #F9DBBF; color: white;">   
    <nav id="header" class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #440B1C; color:
    white;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/ticketlogo.jpg" alt="Pedidos logo" style="width: 190px; height: 70px;">
          SHOW TICKET
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <section  class="pt-3 pb-3">
      <div class="container">
        <div class="row">
          <div class="col text-uppercase text-center">
            <h2 style="color: black;">Registro de Usuario</h2>
          </div>
        </div>
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
            <form method="POST">
              <div class="form-row">
                <div class="form-group col-12 col-md-18">
                  <input type="text" class="form-control" placeholder="Nombre Completo" name="name">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-12 col-md-18">
                  <input type="text" class="form-control" placeholder="Celular" name="celular">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-12 col-md-18">
                  <input type="text" class="form-control" placeholder="Correo" name="correo">
                </div>
              </div>              
              <div class="form-row">
                <div class="form-group col-12 col-md-18">
                  <input type="text" class="form-control" placeholder="Usuario" name="usuario">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-12 col-md-18">
                  <input type="text" class="form-control" placeholder="Contraseña" name="contra">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <button  class="btn btn-block" style="background-color: #440B1C; color: white;" name="register">Registrarse</button>
                </div>
                <div class="col">
                  <a href="index.php" class="btn btn-block" style="background-color: #2C0D00; color: white;">Atras</a>
                </div>
              </div>
            </form>
            <?php
                include("registrouser.php");
            ?>
          </div>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="index.js"></script>

  </body>
</html>