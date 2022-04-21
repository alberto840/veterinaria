<?php
    require 'conexion.php';
 
	$id = $_GET['id'];
    $consulta = "DELETE FROM `pedido` WHERE cp = '$id'";

    $resultado = mysqli_query($conex,$consulta);
            if($resultado){
                header('Location: pedidos.php');
            }else{ 
                ?>
                <script>
                    alert("Ups error");
                </script>
                <?php
            }

    
    
?>