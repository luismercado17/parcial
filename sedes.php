<?php 

    session_start();

    $usuario = $_SESSION['username'];

    if(!isset($usuario)){
        header("location:login.php");
    }
    else{
               
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Aplicacion</title>
</head>



<body>
<?php 
    
require 'logica/conexion.php';

if (isset($_POST['addsedes'])){

        $nombre_sede = $_POST['nombre_sede']; 
        $csede = $_POST['csede'];
        $disede = $_POST['disede'];
        $telefono = $_POST['telefono'];
        $csalas = $_POST['csalas'];
        $consulta = "INSERT INTO sedes (nom_sede, codigo_sede, direccion_sede, telefono_sede, cant_salas_sede) VALUES ('$nombre_sede','$disede','$csede','$telefono','$csalas')";
        $resultado = mysqli_query($conexion,$consulta);
        if($resultado){
            ?>

            <p class="text-center alert alert-success " role="alert">Sede Agregada correctamente</p>
     
            <?php 
          } else{
            ?>
            <h3 class="bad">Ocurrio un error </h3>
            <?php
          }           
    }
?>
    <p class="mb-1 fs-1 fw-bold mt-1">Agregar sede</p>
    <form method="POST">
    <div class="mb-1 form-control-lg col-sm-3">
            <label class="form-label">Nombre de la sede</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nombre_sede" required="required">
        </div>
        <div class="mb-1 form-control-lg col-sm-3">
            <label class="form-label">Código de la sede</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="csede" required="required">
        </div>
        <div class="mb-1 form-control-lg col-sm-3">
            <label class="form-label">Dirección de la sede</label>
            <input type="text" class="form-control " id="exampleInputPassword1" name="disede" required="required">
        </div>
        <div class="mb-3 form-control-lg col-sm-3">
            <label class="form-label">Número de teléfono</label>
            <input type="tel" class="form-control" id="exampleInputEmail1" name="telefono" required="required">
        </div>
        <div class="mb-3 form-control-lg col-sm-3">
            <label class="form-label">Cantidad de salas</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="csalas" required="required">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="addsedes">Registrar</button>
        
    </form>
<?php
if ($conexion){
    
    $consulta = mysqli_query($conexion,"SELECT * FROM sedes");
    while ($datos_sedes = mysqli_fetch_array($consulta)){
        echo "<p>";
        echo $datos_sedes ["nom_sede"];
        echo " - "; // un separador
        echo $datos_sedes ["codigo_sede"];
        echo " - "; // un separador
        echo $datos_sedes ["direccion_sede"];
        echo " - "; // un separador
        echo $datos_sedes ["telefono_sede"];
        echo " - "; // un separador
        echo $datos_sedes ["cant_salas_sede"];
        echo "</p>";
    }
}
else{

}
?>

<?php 
    }
?>
</body>