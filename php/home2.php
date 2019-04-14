<?php
	session_start();
?>
<head><link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/></head>
<body>
	<header id="header">
		<nav>
			<ul class="orden" id="home">
				<li><a href="home.php">Home</a></li>
			</ul>
			<ul class="orden" id="login">
                <li class="segundo" id="log"><a href="controller.php">Insertar Juego</a></li>
				<!-- <li class="segundo" id="log"><a href="login.php">Bienvenido <?php /*echo $user;*/ ?></a></li> -->
				<li class="segundo" id="log"><a href="login.php">Bienvenido</a></li>
				<li class="segundo" id="reg"><a href="desconectar.php">Salir</a></li>
			</ul>
		</nav>
	</header>
</body>