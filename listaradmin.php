<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 

$host = "localhost";
$usuario = "root";
$clave = "";
$bd ="parcial2";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);
$consulta = mysqli_query($conexion,"SELECT nombre,usuario,correo FROM usuarios");
        echo '<center> <table border ="1"';
        echo '<tr>';
        echo '<th id="nombre">Nombre</th>';
        echo '<th id="usuario">Usuario</th>';
        echo '<th id="correo">Correo</th>';
        echo '</tr>';

        while($extraido = mysqli_fetch_array($consulta))
        {
            echo '<tr>';
            echo '<td>',$extraido['nombre'].'td';
            echo '<td>',$extraido['usuario'].'td';
            echo '<td>',$extraido['correo'].'td';
            echo '</tr>';

        }

        echo '</table></center>';



?>
</body>

</html>