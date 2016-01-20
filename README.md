# Calculadora-PHP-BD
App que consiste en una calculadora simple, hecha en PHP que va guardando resultados en BD MySQL, y te muestra coincidencias de resultados.

Esta app cuenta con dos ficheros PHP, uno de ellos (calcluadora.php), como Frontend, donde se plasman los dos campos de introducción de valores y los botones operadores, más un botón que borra los campos introducidos y otro que limpia los últimos resultados obtenidos en pantalla.

Además en este fichero se controlan los eventos de clickado de los botones y se llama a las funciones pertinentes, alojadas en el segundo fichero.

El segundo fichero consta de funciones que calculan la operación dada por los valores obtenidos más el botón de operador pulsado. Además de otra función que guarda el resultado reciente y lo compara con los resultados almacenados anteriormente, informando al usuario de las veces que ya ha sido mostrado su resultado o si es la primera vez que se muestra este mismo.
