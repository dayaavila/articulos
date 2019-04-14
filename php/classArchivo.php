<?php

	abstract class Archivo
	{
		static function check($file, $img, $titulo, $inf)
		{
			$canal = fopen($file, "r");
			while(!feof($canal))
			{
				$line = fgets($canal);
				$datos = explode("|", $line);
				if($datos[0] == $img && $datos[1] == $titulo && $datos[2] == $inf)
				{
					return $datos;
				}
			}
			return false;
        }
    }    
?>        