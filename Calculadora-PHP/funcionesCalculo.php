<html>  
<head>
<meta charset="UTF-8">
<title></title>  
</head>  

<body>  

<?php

	#Funciones de operadores
	function sumar(){

		#Recuperación en variables de los valores introducidos por el usuario
		$valor1 = $_POST['n1']; 
		$valor2 = $_POST['n2'];

		#Operación
		$resul = $valor1 + $valor2; 

		#Salida a pantalla del resultado obtenido
		echo "La suma de ".$valor1." + ".$valor2. " = " .$resul."<br/>";
		guardarDatos($resul);
	}

	function restar(){

		#Recuperación en variables de los valores introducidos por el usuario
		$valor1 = $_POST['n1']; 
		$valor2 = $_POST['n2'];

		#Operación
		$resul = $valor1 - $valor2; 

		#Salida a pantalla del resultado obtenido
		echo "La resta de ".$valor1." - ".$valor2. " = " .$resul."<br/>";
		guardarDatos($resul);
	}

	function multiplicar(){

		#Recuperación en variables de los valores introducidos por el usuario
		$valor1 = $_POST['n1']; 
		$valor2 = $_POST['n2'];

		#Operación
		$resul = $valor1 * $valor2; 

		#Salida a pantalla del resultado obtenido
		echo "La multiplicación de ".$valor1." X ".$valor2. " = " .$resul."<br/>";
		guardarDatos($resul); 
	}

	function dividir(){

		#Recuperación en variables de los valores introducidos por el usuario
		$valor1 = $_POST['n1']; 
		$valor2 = $_POST['n2'];

		#Operación
		$resul = $valor1 / $valor2; 

		#Salida a pantalla del resultado obtenido
		echo "La división de ".$valor1." / ".$valor2. " = " .$resul."<br/>";
		guardarDatos($resul); 
	}


	#Función de guardado y comparación de resultados en la BD
	function guardarDatos($dato){

		#Datos de la BD
		$servername = "localhost";
		$username = "root";
		$password = "alumnado";
		$dbname = "prueba1";

		# Crear conexión con la BD
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		#Checkear conexión de la BD
		if ($conn->connect_error) {
			#Salida error
		    die("Connection failed: " . $conn->connect_error);
		} 

		#Sentencia SQL para insertar el último resultado obtenido
		$sql = "INSERT INTO calculadora (resultados) VALUES ('$dato');";

		#Inserción del último resultado en la BD
		if ($conn->query($sql) === TRUE) {
			#Salida a pantalla del resultado obtenido
		    echo "Nuevo resultado guardado en BD satisfactoriamente <br/>";
		} else {
			#Salida error
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		#Sentencia SQL para consultar lo resultados almacenados en la BD
		$sql1 = "SELECT * FROM calculadora;";
		$result = $conn->query($sql1);

		#Variable que almacena el número de coincidencias del resultado obtenido con los almacenados
		$coincidencias=-1;

		#Comparación del resultado obtenido con los almacenados
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        if($row["resultados"]==$dato){
		        	$coincidencias++;
		        }
		    }
		    if($coincidencias===0){
		    	#Salida a pantalla del resultado obtenido si es la primera vez que se calcula este resultado
		    	echo "Es la primera vez que se dá este resultado";
		    }else{
		    	#Salida a pantalla del resultado obtenido si hay coincidencias
		    	echo "Este resultado ya se ha calculado ".$coincidencias." veces anteriormente";
		    }
		} else {
			#Salida error
		    echo "0 results";
		}

		#Cierre de la conexión con las BD
		$conn->close();
	}
?> 

</body> 
</html>
