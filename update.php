<?php
				
	   
    include("conexion.php");
    session_start();
    if(isset($_POST['modificar'])){
        if(strlen($_POST['asig']) >= 1 &&
           strlen($_POST['trans']) >= 1 &&
           strlen($_POST['prod']) >= 1 &&
           strlen($_POST['pre']) >= 1 &&
           strlen($_POST['env']) >= 1 &&
           strlen($_POST['tot']) >= 1 &&
           strlen($_POST['ha']) >= 1 &&
           strlen($_POST['he']) >= 1){
            
            $id = $_POST['cp'];
            $cu = $_SESSION['id'];
            $asig = $_POST['asig'];
            $trans = $_POST['trans'];
            $prod = $_POST['prod'];
            $pre = $_POST['pre'];
            $env = $_POST['env'];
            $tot = $_POST['tot'];
            $ha = $_POST['ha'];
            $he = $_POST['he'];
            
            echo $id;
            echo $trans;

            $consulta = "UPDATE `pedido` SET `asignado`='$asig',`transporte`='$trans',
                        `producto`='$prod',`precio`='$pre',`envio`='$env',`total`='$tot',`hora_asig`='$ha',
                        `hora_ent`='$he' WHERE cp = '$id'";

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

           }else {
            ?>
                    <script>
                        alert("Complete los campos");
                    </script>
                    <?php
            } 
    }
	
?>