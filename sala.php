<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Sala</title>
   
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<div class="container-fluid">
		    <a class="navbar-brand" href="index.php">Sala</a>
	    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      		<span class="navbar-toggler-icon"></span>
	    	</button>
	    	<div class="collapse navbar-collapse" id="navbarNavDropdown">
	      		<ul class="navbar-nav">
	        		<li class="nav-item">
	          			<a class="nav-link" href="order.php">Lista de computadores</a>
	        		</li>
	      		</ul>
	    	</div>
	  	</div>
	</nav>
    
  <div class="container"> <!-- Start: Container -->
        <div class="row mt-5"> <!-- Start: Row Header -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center text-uppercase">Sala</h1>
                    </div>
                </div>
            </div>
        </div> <!-- End: Row Header -->
    </div>  
    <hr>
    <div class="row">
			<form class="form-group col-6" method="POST">
				<div class="row">
					<div class="col-3">
						<label>Codigo de sala:</label>
					</div>
					<div class="col-3">
						<input type="text" name="client" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<label>Sede:</label>
					</div>
					<div class="col-3">
                          <input type="text" name="client" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<label>Cantidad de computadores:</label>
					</div>
					<div class="col-3">
                        <input type="text" name="client" class="form-control">	
					</div>
				</div>
				<hr>
				<button type="submit" class="btn btn-primary" name="sala">Guardar</button>
			</form>
	</div>

    <?php     
    include("logica/salaSQL.php");

    ?>


</body>
</html>