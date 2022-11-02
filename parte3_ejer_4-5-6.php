<?php

/** MÓDULO 1: Inicializa una estructura de datos con ejemplos de palabras de 5 letras en mayúsculas y retorna una colección de 15 palabras como mínimo
* @param
* @return
*/



/** MÓDULO 4: Verifica la longitud de una palabra y que todos sus caractéres sean alfabéticos
 * @param STRING $cadena
 * @return BOOLEAN $esLetra 
 * ****LISTO*****
 */
function esPalabra($cadena)
{
    //int $cantCaracteres, $i, boolean $esLetra
    $cantCaracteres = strlen($cadena);
    $esLetra = true;
    $i = 0;
    while ($esLetra && $i < $cantCaracteres) {
        $esLetra =  ctype_alpha($cadena[$i]);
        $i++;
    }
    return $esLetra;
}



/** MÓDULO 5: Pide al usuario un número entre un rango de valores. Si éste no es válido, se pide de nuevo
 * @param INT $min
 * @param INT $max
 * @return INT Retorna un número válido
 */
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}



/** MÓDULO 6:Dado un número de partida, muestra en pantalla los datos de la partida
 * @param INT $m6nroPartida
 * @return
 */
function m6partidas ($m6nroPartida){
    echo "Partida WORDIX ".$$m6nroPartida.": palabra ".$m6palabra."\nJugador: ".$m6jugador."\nPuntaje: ".$m6puntos."\nIntentos
}

