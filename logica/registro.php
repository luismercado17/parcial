<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <center>
        <!--     <form method="post">
            <h1>Crea tu cuenta</h1>
            <h3>Digita tu email</h3>
            <input type="text" name="usuario" placeholder="">
            <h3>Crea contraseña</h3>
            <input type="password" name="clave" placeholder="">
            <input type="submit" name="registrar">
        </form>
        <a href="../login.php">Ingresar</a>
-->

        <p class="mb-1 fs-1 fw-bold mt-1">Registrate</p>
        <form method="POST">
        <div class="mb-1 form-control-lg col-sm-3">
                <label class="form-label">Digite su nombre completo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="nombre">
            </div>
            <div class="mb-1 form-control-lg col-sm-3">
                <label class="form-label">Cree un usuario</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="usuario">
            </div>
            <div class="mb-1 form-control-lg col-sm-3">
                <label class="form-label">Cree una contraseña</label>
                <input type="password" class="form-control " id="exampleInputPassword1" name="clave">
            </div>
            <div class="mb-3 form-control-lg col-sm-3">
                <label class="form-label">Digita tu email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="registrar">Registrar</button>
            
        </form>
        <a href="../login.php">Ingresar</a>


    </center>

    <?php     
    include("registrar.php");
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>