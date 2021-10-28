<?php 

require 'conexion.php';

session_start();

if (isset($_POST['registrar'])){

        $usuario = $_POST['usuario']; 
        $clave = $_POST['clave'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $consulta = "INSERT INTO usuarios (usuario, clave, nombre, correo) VALUES ('$usuario','$clave','$nombre','$correo')";
        $resultado = mysqli_query($conexion,$consulta);
        if($resultado){
            ?>

            <p class="text-center alert alert-success " role="alert">Te has inscrito correctamente</p>
     
            <?php 
          } else{
            ?>
            <h3 class="bad"> Ocurrio un error </h3>
            <?php
          }  
            
        
    
}

?>