<html>  
<head>
<meta charset="UTF-8"> 
<title>Calculadora</title>  
</head>  

<body>  
<form method="POST" action="">

	<!-- Campos de introducción de valores -->
    <p>Valor 1: <input type="text" name="n1" size="20"></p> 
    <p>Valor 2: <input type="text" name="n2" size="20"></p>

    <!-- Botones operadores -->
    <input type="submit" value="+" name="sumar">
    <input type="submit" value="-" name="restar">
    <input type="submit" value="X" name="multiplicar">
    <input type="submit" value="/" name="dividir">
    <input type="submit" value="x^y" name="elevar">


    <!-- Botones de borrado de los campos y limpiado de resultados recientes en la pantalla -->
    <input type="reset" value="Borrar" name="reseteo">
    <input type="submit" action="calculadora.php" value="Limpiar Resultados" name="limpiar"><br/><br/>
    <?php

    	include "funcionesCalculo.php";
 		
 		#Control de evento de clickado sobre los botones operadores, y llamada a sus funciones
		if(isset($_POST['sumar'])){
		   sumar();
		}

		if(isset($_POST['restar'])){
		   restar();
		}

		if(isset($_POST['multiplicar'])){
		   multiplicar();
		}

		if(isset($_POST['dividir'])){
		   dividir();
		}
		if(isset($_POST['elevar'])){
		   elevar();
		}

	?>
</form> 

</body> 
</html>

