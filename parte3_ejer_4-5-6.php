<?php




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


//-----------------------------------------------------------------


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


//-------------------------------------------


/** MÓDULO 6:Dado un número de partida, muestra en pantalla los datos de la partida
 * @param INT $m6nroPartida
 * @return STRING Retorna un mensaje
 */
function m6partidas($m6partida)
{
    //STRING $mensaje

    $m6intentos = 6;
    $m6partida = 13;
    $m6palabra = "MELON";
    $m6usuario = "majo";
    $m6puntaje = 0;

    if ($m6intentos > 0 && $m6intentos <=6 && $m6puntaje != 0){
        $mensajeIntentos = "adivinó la palabra en ".$m6intentos." intentos";
    }else{
        $mensajeIntentos = "No adivinó la palabra";
    }

    $mensaje = "Partida WORDIX ".$m6partida.": palabra ".$m6palabra."\nJugador: ".$m6usuario."\nPuntaje: ".$m6puntaje."\nIntentos: ".$mensajeIntentos;

    return $mensaje;
}


/*
PROGRAMA PRINCIPAL

*/

$mensaje = " ";

$mensaje = m6partidas(13);
echo $mensaje;