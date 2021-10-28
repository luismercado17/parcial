<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
        <!--        
    <h1>Bienvenido</h1>
    <h2>Ingresar</h2>
        <form action="logica/loguear.php" method="POST">
        <h3>Ingresar usuario</h3>
        <input type="text" name="usuario" placeholder="Usuario">
        <h3>Ingresar contraseña</h3>
        <input type="password" name="clave" placeholder="Contraseña">
        <button type="sumbit"> ENTRAR </button>
    </form>
-->


<p class="mb-2 fs-1 fw-bold mt-5">Inicio de sesión</p>
        <form action="logica/loguear.php" method="POST">
            <div class="mb-2 form-control-lg col-sm-3">
                <label class="form-label">Correo Electronico</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="usuario">
            </div>
            <div class="mb-2 form-control-lg col-sm-3">
                <label class="form-label">Contraeña</label>
                <input type="password" class="form-control " id="exampleInputPassword1" name="clave">
            </div>
            <button type="submit" class="btn btn-primary mb-3" name="ingresar">Ingresar</button>
        </form>

        <a href="logica/registro.php"> Registrar </a>
       
    </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>