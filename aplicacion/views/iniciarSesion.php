<?php
include('loguear.php'); // Includes Login Script
 
if(isset($_SESSION['login_user_sys'])){
header("location: INICIO.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Formulario de inicio de sesión con PHP & MySQL</title>
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
<!--header start here-->


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

		<div class="header agile">
			<div class="wrap">
				<div class="login-main wthree" style="margin-top: 20px;margin-bottom: 0px;">
					<div class="login">
						<h3>Iniciar sesión</h3>
						<form action="#" method="post">
							<input type="text" placeholder="Usuario" required="" name="username" required>
							<input type="password" placeholder="Contraseña" name="password" required>
							<input name="submit" type="submit" value="Ingresar">
						</form>
					<div class="clear"> </div>
					<span><?php echo $error; ?></span>
					</div>
						
				</div>
			</div>
		</div>

		<footer class="row" style="background-color: #4B525F; margin-top: 50px; margin-bottom: 200px; height: 130px"  >
			<div class="col">
				<div class="copy-rights w3l row">		 	
					<p style="padding-top: 0px; text-align: center;">© <?php echo date("Y");?> <a href="http://obedalvarado.pw/" target="_blank">Taller de Investigacion II</a>  Todos los derechos reservados | Basado en el diseño de:  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>		 	
				</div>
			</div>
		</footer>

	</div>
</div>

</body>
</html>