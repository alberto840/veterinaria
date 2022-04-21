<?php
	require 'conexion.php';
    session_start();
    $us = $_SESSION['id'];
	$sql = "SELECT * FROM pedido Where cu = '$us'";
	$resultado = $conex->query($sql);
	
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <title>SHOW TICKET</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="57" style="background-color: #F9DBBF; color: white;">   
  <nav id="header" class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #440B1C; color:
    white;">
      <div class="container fs-5">
        <a class="navbar-brand" href="#">
		<img src="images/ticketlogo.jpg" alt="Pedidos logo" style="width: 190px; height: 70px;">
          SHOW TICKET
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        <div>
			<br><br><br>
			<h2 style="text-align:center; color: black;">REGISTRO DE PEDIDOS</h2>
        </div>
        <br><br>
        <div class="row table-responsive">
			<table class="table table-striped">
				<thead class="table-dark">
					<tr>
						<th>Nº Pedido</th>
						<th>Solicitante</th>
						<th>Modelo</th>
						<th>Marca</th>
						<th>Precio</th>
						<th>Costo envío</th>
						<th>Total</th>
						<th>Fecha de envio</th>
						<th>Hora Entrega</th>
					</tr>
				</thead>
		    	<tbody>
					<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
						<tr style="color: black;">
							<td><?php echo $row['cp']; ?></td>
							<td><?php echo $row['asignado']; ?></td>
							<td><?php echo $row['transporte']; ?></td>
							<td><?php echo $row['producto']; ?></td>
							<td><?php echo $row['precio']; ?></td>
							<td><?php echo $row['envio']; ?></td>
							<td><?php echo $row['total']; ?></td>
							<td><?php echo $row['hora_asig']; ?></td>
							<td><?php echo $row['hora_ent']; ?></td>
							<td><a href="modificar.php?id=<?php echo $row['cp']; ?>">Modificar</a></td>
							<td><a href="eliminar.php?id=<?php echo $row['cp']; ?>">Eliminar</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<br>
		<div class="row px-5">
			<a href="nuevopedido.php" class="btn btn-primary px-5" style="background-color: #440B1C; color: white;">Nuevo Pedido</a>
        </div>
    </div>
    
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Eliminar Pedido</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este pedido?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
        </div>
        
        <script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="index.js"></script>

  </body>
</html>