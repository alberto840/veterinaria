<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/contactos.css">
    <title>VetFoca</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="57" style="background-color: #f0f0af  ; color: white;">   
    <nav id="header" class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #9dbcbc; color:
    white;">
      <div class="container fs-5">
        <a class="navbar-brand" href="#">
        <img src="https://mundovets.com/wp-content/uploads/2021/10/Logotipo-para-clinica-veterinaria-scaled.jpg" alt="Pedidos logo" style="width: 190px; height: 70px;">
        VetFoca
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <section  class="pt-3 pb-3">
    <br><br><br>
      <div class="container">
        <div class="row">
        <br><br><br>
          <div class="col text-uppercase text-center">
            <h2 style="color: black;">REGISTRAR CITA</h2>
          </div>
        </div>
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
            <form method="POST">
              <div class="form-row">
                <div class="form-group col-12 col-md-18">
                  <input type="text" class="form-control" placeholder="Solicitante" name="asig">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-12 col-md-18">
                  <input type="text" class="form-control" placeholder="Causa de la cita medica" name="trans">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-12 col-md-18">
                  <input type="text" class="form-control" placeholder="sintomas" name="prod">
                </div>
              </div>  
              <p style="color: black">Datos del animalito</p>            
              <div class="form-row">                
                <div class="form-group col-12 col-md-4">
                  <input type="text" class="form-control" placeholder="Especie" name="pre">
                </div>
                <div class="form-group col-12 col-md-4">
                  <input type="text" class="form-control" placeholder="Nombre del animal" name="env">
                </div>
                <div class="form-group col-12 col-md-4">
                  <input type="text" class="form-control" placeholder="Edad animal" name="tot">
                </div>
              </div>
              <p style="color: black">Tiempo de la cita</p>  
              <div class="form-row">
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" placeholder="Fecha de cita" name="ha">
                </div>
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" placeholder="Hora de cita" name="he">
                </div>
              </div>
              <br><br>
              <div class="form-row">
                <div class="col">
                  <button onclick="myFunction()" class="btn btn-block" style="background-color: #ff370f; color: white;" name="crear">Registrar</button>
                </div>
                <div class="col">
                  <a href="index.php" class="btn btn-block" style="background-color: #332717; color: white;">Atras</a>
                </div>
              </div>
            </form>
            <?php
                include("registropedido.php");
            ?>
          </div>
        </div>
      </div>
    </section>

    <script>
      function myFunction() {
      alert("¡La cita fue registrada, te estaremos esperando");
    }
</script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="index.js"></script>

  </body>
</html>