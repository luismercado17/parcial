<?php 

    session_start();

    $usuario = $_SESSION['username'];

    if(!isset($usuario)){
        header("location:login.php");
    }else{
               
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
    <center>
        <h1 class="fs-1 fw-bold">Bienvenido <?php echo "$usuario"?></h1>



        <form action="listaradmin.php" method="POST">
            <input type="submit" value="Listar admin" name="administradores">
        </form>

   
        <img src="https://alertapc.co/wp-content/uploads/2020/06/Instalacio%CC%81n-de-computadores.jpg" alt="">








    <?php 
        echo "<a href='logica/salir.php'> Salir </a>";
    }
    ?>
 </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>