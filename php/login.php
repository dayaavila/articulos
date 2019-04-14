<?php
	session_start();
	require_once 'index.php';
?>
<head><link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/></head>

<body>
	<form class="contact_form" id="login_form" action="controller.php" method="POST">
		<h1 class="contact_form">Login</h1>
		<div>
        <ul>
			<li> 
				<input type="text" name="nombre" id="name" placeholder="Nombre"/>
			</li>
			<li>
				<input type="password" name="pass" id="pwd" placeholder="Password"/>
			</li>
			<li>
				<input type="submit" name="enviar" value="Login"/>
			</li>
		    </ul>
		</div>
		<div id="errorsL"></div>
	</form>
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/login.js"></script>
    
    
	<?php 
		//funciona pero no me muestra el registro
		session_start();
		if(!isset($_SESSION["user"]))
		{
			header("Location: controller.php");
		}
	?>
	
</body>
</html>