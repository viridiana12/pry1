
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf_8"> 
    <title>Pagina php</title>
</head>
<body>
    <h1>Mi pagina Php</h1>
    <h2>Lenguaje de programacion Visual</h2>
    <h2>Viridiana Valdes Martinez</h2>
	<h2>Ejemp de una clase </h2>
    <p></p>
    <?Php
	    
	    class animal{
		var $nombre;
		var $color;
		var $tipo;
		var $TamañoOjos;
		var $color_ojos;
	
		
		function perro($nombre,$tipo, $color,$TamañoOjos,$color_ojos, $edad){
		echo "<br>";
		echo "Nombre: ", $this->nombre = $nombre, "<br>";
		echo "Tipo: ", $this->tipo= $tipo, "<br>";
		echo "Color: ", $this->color = $color, "<br>";
		echo "Tamaño de ojos: ", $this->TamañoOjos = $TamañoOjos, "<br>";
		echo "Color de ojos: ", $this->color_ojos = $color_ojos, "<br>";
		echo "Edad: ", $this->edad = $edad, " años", "<br>";
		}
		
		
		function ave($nombre, $color, $tipo){
		echo "<br>";
        echo "Nombre: ", $this->nombre = $nombre, "<br>";
		echo "Tipo: ", $this->tipo= $tipo, "<br>";
		echo "Color: ", $this->color = $color, "<br>";
		}
		
		}
		$objeto =new  animal;
		$objeto->perro("kinchi ", " Canino", "Cafe claro ", " Medianos", " grises", 4);
        $objeto->perro("Doky ", " Canino ", "Negro ", "Chiquitos ", " Cafe", 8);
		$objeto->perro("Betoben ", " Canino ", "Cafe/Blanco ", "Grandes ", "Cafe claro", 6);
		
		$objeto1 =new  animal;
		$objeto1->ave("Cotorro ", " Ave ", "Verde");
        $objeto1->ave("Canario ", " Ave ", "Amarillo");
		$objeto1->ave("Cotorro ", " Ave ", "Azul");
		
		?>
</body>
</html>