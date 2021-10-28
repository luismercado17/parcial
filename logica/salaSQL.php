<?php 

require 'conexion.php';

session_start();

if (isset($_POST['sala'])){

        $cod_sala = $_POST['cod_sala']; 
        $cod_sede_sala = $_POST['cod_sede_sala'];
        $contcomp_sala = $_POST['contcomp_sala'];
        $consulta = "INSERT INTO sala (cod_sala, cod_sede_sala, contcomp_sala) VALUES ('$cod_sala','$cod_sede_sala','$contcomp_sala')";
        $resultado = mysqli_query($conexion,$consulta);
        if($resultado){
            ?>

            <p class="text-center alert alert-success " role="alert">Sala guardada</p>
     
            <?php 
          } else{
            ?>
            <h3 class="bad"> Ocurrio un error </h3>
            <?php
          }  
            
        
    
}

?>