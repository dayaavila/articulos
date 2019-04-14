<?php 

	require_once "template.php"; 
	require_once "classArchivo.php";
	require_once "classArticulos.php";

?>

<?php

// $datos = [];

// foreach ($datos as $value) 
// {
//    echo $value . "\n";
// }
// $objeto = new Articulos($img[0], $titulo[1], $inf[2]);

?>


<?php 
// $myfile = fopen("articulos.txt", "r") or die("Unable to open file!");
// while(!feof($myfile)) {
//   echo fgets($myfile) . "<br>";
// }
// fclose($myfile);
?>

<?php 

	$canal = fopen("articulos.txt", "r");
	$articulos = [];

	while(!feof($canal))
	{
		$linia = fgets($canal);
		array_push($articulos, $linia);
	}
	
	foreach ($articulos as $value) 
	{
		$partes = explode("|", $value);
		echo '<div class="art">';
				echo '<img src="img/alter.jpg" alt="alter" height="50" width="50" class="img">';
				echo '<img src="img/Ed-Sheeran.jpg" alt="alter" height="50" width="50" class="img">';
				echo '<img src="img/john_mayer.jpg" alt="alter" height="50" width="50" class="img">';
				echo '<img src="img/lady-gaga.jpg" alt="alter" height="50" width="50" class="img">';
				echo '<img src="img/oasis.jpg" alt="alter" height="50" width="50" class="img">';
				echo '<img src="img/passenger.jpg" alt="alter" height="50" width="50" class="img">';
				echo '<img src="img/pink.jpg" alt="alter" height="50" width="50" class="img">';
				echo '<img src="img/red_hot.jpg" alt="alter" height="50" width="50" class="img">';
				echo '<div class="titulo">'.$partes[0].'</div>';
		echo '</div>';
	}
	header("location: home.php");
?>
