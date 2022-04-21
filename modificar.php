<?php
    require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM pedido WHERE cp = '$id'";
	$resultado = $conex->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Pedidos al Instante</title>
    </head>
	
	<body data-spy="scroll" data-target="#navbar" data-offset="57">

    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="Pedidos logo" style="width: 50px; height: 50px;">
          Pedidos al Instante
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>  
		<div class="container">
			<div>
				<h3 style="text-align:center">MODIFICAR PEDIDO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" autocomplete="off">
				<div class="form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="asig" placeholder="Nombre" value="<?php echo $row['asignado']; ?>" >
					</div>
				</div>
				<input type="hidden" id="id" name="cp" value="<?php echo $row['cp']; ?>" />
				<div class="form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="trans" placeholder="Email" value="<?php echo $row['transporte']; ?>">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prod" placeholder="Producto" value="<?php echo $row['producto']; ?>" >
					</div>
                </div>
                
                <div class="form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pre" placeholder="Precio" value="<?php echo $row['precio']; ?>" >
					</div>
                </div>
                
                <div class="form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="env" placeholder="Envio" value="<?php echo $row['envio']; ?>" >
					</div>
                </div>
                
                <div class="form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tot" placeholder="Total" value="<?php echo $row['total']; ?>" >
					</div>
                </div>
                
                <div class="form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ha" placeholder="Hora asignada" value="<?php echo $row['hora_asig']; ?>" >
					</div>
                </div>
                
                <div class="form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="he" placeholder="Hora entrega" value="<?php echo $row['hora_ent']; ?>" >
					</div>
				</div>

				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="pedidos.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary" name="modificar">Guardar</button>
					</div>
				</div>
            </form>
            <?php
                include("update.php");
            ?>
		</div>
	</body>
</html>