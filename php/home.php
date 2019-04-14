<?php require_once "template.php"; ?>

<?php

// $datos = [];

// foreach ($datos as $value) 
// {
//    echo $value . "\n";
// }

// $objeto = new Articulos($img, $titulo, $inf);

?>


<?php 
$myfile = fopen("articulos.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<?php 
			// require_once "template.php";

			// $canal = fopen("contactos.txt", "r");

			// echo "<form action=borrar.php method=post>";
			// echo "<table>";
			// echo "<tr><th>Empresa</th><th>Direccion</th><th>Nombre</th><th>DNI</th><th>Telefono</th><th>Mail</th><th>Sector</th></tr>";
			// $contador = 0;
			// while(!feof($canal))
			// {
			// 	$line = fgets($canal);
			// 	$datos = explode(":", $line);

			// 	if($_SESSION["user_data"][0]==$datos[0])
			// 	{
			// 		echo "<tr>";
			// 			for($i=1; $i<count($datos); $i++)
			// 			{
			// 				echo "<td>$datos[$i]</td>";
			// 			}
			// 			echo "<td><input type=radio name=borrar value=$contador></td>";
			// 		echo "</tr>";
			// 	}
			// 	$contador++;
			// }
			// echo "</table>";
			// echo "<input type='submit' name=boton>";
			// echo "</form>";
		?>

