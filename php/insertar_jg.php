<?php
	session_start();
	require_once 'index.php';
?>
<head><link rel="stylesheet" type="text/css" href="css/style_insert.css" media="screen"/></head>

<body>
	<form class="insertar_juego" id="insertar_jg" action="controller.php" method="POST">
		<h2 class="contact_form">Insertar</h2>
		<div>
			<ul>
			<li> 
				<input type="text" name="nombre_articulo" id="name_art" placeholder="Nombre del artículo"/>
			</li>
			<li> 
                <textarea name="comment" id="textArea" placeholder="Alter Bridge es una banda estadounidense de hard rock y metal alternativo formada por Mark Tremonti, Brian Marshall y Scott Phillips (ex-miembros de Creed), con Myles Kennedy (ex-vocalista y guitarrista de The Mayfield Four) en el 2004.Alter Bridge lanzó su álbum debut One Day Remains el 10 de agosto del mismo año, con su primer sencillo."></textarea>
			</li>
			<li>
                <input type="submit" name="subir" value="Subir Archivo" class="envia"/>
			</li>
			<li>
                <input type="image" src="img/alter.jpg" alt="Submit" id="imge">
			</li>
			<li>
				<input type="submit" name="insertar" value="Insertar" class="envia"/>
			</li>
		    </ul>
		</div>
		<div id="errorsJs"></div>
	</form>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/insertar_jg.js"></script>
	
</body>
</html>