<?php
    include("conexion.php");

    if(isset($_POST['register'])){
        if(strlen($_POST['name']) >= 1 &&
           strlen($_POST['celular']) >= 1 &&
           strlen($_POST['correo']) >= 1 &&
           strlen($_POST['usuario']) >= 1 &&
           strlen($_POST['contra']) >= 1){

            $name = $_POST['name'];
            $celular = $_POST['celular'];
            $correo = $_POST['correo'];
            $usuario = $_POST['usuario'];
            $contra = $_POST['contra'];
            

            $consulta = "INSERT INTO `usuario`(`nombre`, `celular`, `correo`, `usuario`, `contrasenia`)
                         VALUES ('$name','$celular','$correo','$usuario','$contra')";

            $resultado = mysqli_query($conex,$consulta);
            if($resultado){
                header('Location: index.php');
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