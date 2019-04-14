<?php

	if(isset($_POST))
	{
		switch (true) 
		{
			case isset($_POST['login']):
				ejemplo();
				break;
			
			case isset($_POST['registro']):

				$nombre = $_POST["nombre"];
				$usuario = $_POST["usuario"];
				$password = $_POST["pass"];
				$repeat = $_POST["pass_repeat"];
				$email = $_POST["email"];
				//abro la carpeta e indico que hará, en este caso con a añade
				$canal = fopen("registros.txt", "a");
				// fwrite escribe y PHP_EOL me indica el salto de linea
				$user = $_SESSION['user'];
				fwrite($canal, PHP_EOL.$nombre.";".$usuario.";".$password.";".$repeat.";".$email);
				fclose($canal);
				break;

			default:
				header('location: home2.php');
		}
	}
	else
	{
		header('location:../index.php');
	}

	function ejemplo()
	{
		//instanciar objeto
		//llamar a sus metodos
	}

	function getSubString($string)
	{
	    $length = 150;
	    $stringDisplay = substr(strip_tags($string), 0, $length);
	    if (strlen(strip_tags($string)) > $length)
	        $stringDisplay .= ' ...';
	    return $stringDisplay;
	}
?>