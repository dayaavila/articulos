<?php
	session_start();
	require_once 'index.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form class="contact_form" id="contact_form" action="controller.php" method="POST">
		<h1 class="contact_form">Registro</h1>
		<div>
			<ul>
			<li> 
				<input type="text" name="nombre" id="name" placeholder="Nombre"/>
			</li>
			<li> 
				<input type="text" name="usuario" id="user" placeholder="Usuario"/>
			</li>
			<li>
				<input type="password" name="pass" id="pwd" placeholder="Password"/>
			</li>
			<li>
				<input type="password" name="pass_repeat" id="pws_repeat" placeholder="Repita Password"/>
			</li>
			<li>
				<input type="email" name="email" id="email" placeholder="E-mail"/>
			</li>
			<li>
				<input type="submit" name="enviar" value="Registro"/>
			</li>
		    </ul>
		</div>
		<div id="errors"></div>
	</form>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/index.js"></script>
	
</body>
</html>

<!-- por verificar que debo usar -->
<?php
	// session_start();
	// if($_POST)
	// {
	// 	$user = $_POST["nombre"];

	// 	$_SESSION["user"];
	// 	header("location: home2.php");
	// }

	// session_start();
	// if(!isset($_SESSION["user_data"]))
	// {
	// 	header("Location: home2.php");
	// }


	// session_start();
	// if(!isset($_SESSION["page1"]))
	// {
	// 	$_SESSION["page1"] = 1;
	// }





	//verifico que venga del fichero con isset
		// if(isset($_POST["enviar"]))
		// {
		// 	$nombre = $_POST["nombre"];
		// 	$usuario = $_POST["usuario"];
		//     $password = $_POST["pass"];
		//     $repeat = $_POST["pass_repeat"];
		//     $email = $_POST["email"];
		//     $canal = fopen("registros.txt", "a");
		// 	$user = $_SESSION['user_session'];
		// 	fwrite($canal, PHP_EOL.$nombre.";".$usuario.";".$password.";".$repeat.";".$email);
		// 	fclose($canal);
		// }
?>
