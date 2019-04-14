<?php

require_once "classArchivo.php";

	class Articulos
	{
		private $img;
        private $titulo;
        private $inf; 

		public function __construct()
		{
			$total_args = func_num_args();
			$argumentos = func_get_args();

			switch ($total_args) 
			{
				case 3:
					$this->img = $argumentos[0];
                    $this->titulo = $argumentos[1];
                    $this->inf = $argumentos[2];
					break;
			}
        }
        
        public function getImg()
		{
			return $this->img;
		}
    }
    
	

?>

<!-- class Articulos
	{
		private $img;
        private $titulo;
        private $inf;      

        public function __construct($img, $titulo, $inf)
		{
			$this->img = $img;
            $this->titulo = $titulo;
            $this->inf = $inf;
		}
    } -->

