<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada&family=Mulish:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/contactos.css">
    <title>Pedidos al Instante</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="57" style="background-color: #F9DBBF; color: white;">   
  <?php
  include ("header.php");
  ?>

    <section  class="pt-3 pb-3">
      <div class="container">
        <div class="row">
          <div class="col text-uppercase text-center">
            <br><h2 style="color: black;">Contactanos</h2><br>
          </div>
        </div>
        <div class="row">
          <div class="col text-center" style="color: black;">
            <h2>Ubicacion:</h2>
            <p>Edificio Rafaela, Av. Estados Unidos 1487, La Paz</p>
          </div>
        </div>
        <div>
            <center>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7651.156792134762!2d-68.13153303068847!3d-16.496872326864843!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2069f08d03cd%3A0x345c4c74c9b621db!2sVeterinaria%20El%20Buen%20Pastor!5e0!3m2!1ses-419!2sbo!4v1650569659031!5m2!1ses-419!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>
        </div>
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
          <p style="color: black;">Mandanos un mensaje y te responderemos lo mas breve posible.</p>
            <form id="myform">
              <div class="form-row">
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" placeholder="Apellido">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" placeholder="Celular">
                </div>
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" placeholder="Correo electrónico">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <textarea name="text" class="form-control form-control-lg" placeholder="Mensaje...."></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <button  id = "enviar" type="reset" class="btn btn-block" style="background-color: #ff370f; color: white;">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <?php
  include ("footer.php");
  ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="scripts/contactos.js"></script>

  </body>
</html>