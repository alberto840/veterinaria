<?php
    include("conexion.php");

    if(isset($_POST['iniciar'])){
        if(strlen($_POST['use']) >= 1 &&
           strlen($_POST['pas']) >= 1){
            
            $use = $_POST['use'];
            $pas = $_POST['pas'];
            

            $consulta = "SELECT * from usuario where usuario = '$use' and contrasenia = '$pas'";
            $resultado = mysqli_query($conex,$consulta);
            $array = mysqli_num_rows($resultado); 

            if($array>0){
                $data = mysqli_fetch_array($resultado);
                session_start();
                $_SESSION['id'] = $data['cu'];
                header('Location: pedidos.php');
            }else{   
                ?>
                    <script>
                        alert("No existe");
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