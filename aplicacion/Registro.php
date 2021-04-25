<?php
include('views/loguear.php'); // Includes Login Script
 
if(isset($_SESSION['login_user_sys'])){
header("location: INICIO.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>REGISTRO</title>
<!-- Custom Theme files -->
<link rel="stylesheet" href="../public/CSS/bootstrap.min.css">
<link href="../public/CSS/estilos.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>
<!--google fonts-->
</head>
<body style="max-height: 0px;">

    <div style="background-color: silver;" class="container-fluid">
    <div style="background-color: skyblue;"  class="container" style="height: 100%;">

        <header class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbarfixed-top navbar-dark bg-dark row">
                    <a class="navbar-brand" href="#">
                        <img src="../public/img/Login.png" width="80" height="80" alt="">
                    </a>
                </nav>
            </div>
        </header>
<!--header start here-->
<h1>Registrate para acceder</h1>
<div class="header agile">
	<div class="wrap">
		<div class="login-main wthree">
			<div class="login">
			<h3>REGISTRO</h3>
			<form action="#" method="post">
				<input type="text" placeholder="Nombre" required="" name="nombre" required>
				<input type="text" placeholder="Usuario" required="" name="username" required>
				<input type="password" placeholder="Contraseña" name="password" required>
				<input name="submit" type="submit" value="Registrar">
			</form>
			<div class="clear"> </div>
				<span><?php echo $error; ?></span>
			</div>
			
			
		</div>
	</div>
</div>
<footer class="row" style="background-color: #4B525F; margin-top: 50px; margin-bottom: 200px; height: 130px" >
			<div class="col">
				<div class="copy-rights w3l row">		 	
					<p style="padding-top: 0px; text-align: center;">© <?php echo date("Y");?> <a href="http://obedalvarado.pw/" target="_blank">Taller de Investigacion II</a>  Todos los derechos reservados | Basado en el diseño de:  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>		 	
				</div>
			</div>
		</footer>
		
	</div>
	</div>

<!--copyrights start here-->
   <script src="js/jquery-3.4.1.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
</body>
</html>