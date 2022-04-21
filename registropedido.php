<?php
    include("conexion.php");
    session_start();
    if(isset($_POST['crear'])){
        if(strlen($_POST['asig']) >= 1 &&
           strlen($_POST['trans']) >= 1 &&
           strlen($_POST['prod']) >= 1 &&
           strlen($_POST['pre']) >= 1 &&
           strlen($_POST['env']) >= 1 &&
           strlen($_POST['tot']) >= 1 &&
           strlen($_POST['ha']) >= 1 &&
           strlen($_POST['he']) >= 1){
            
            $cu = $_SESSION['id'];
            $asig = $_POST['asig'];
            $trans = $_POST['trans'];
            $prod = $_POST['prod'];
            $pre = $_POST['pre'];
            $env = $_POST['env'];
            $tot = $_POST['tot'];
            $ha = $_POST['ha'];
            $he = $_POST['he'];
            

            $consulta = "INSERT INTO `pedido`(`cu`, `asignado`, `transporte`, `producto`, `precio`, `envio`, `total`, `hora_asig`, 
                        `hora_ent`) VALUES ('$cu','$asig','$trans','$prod','$pre','$env','$tot','$ha','$he')";

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