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
//Invoco módulo 6
$mensaje = m6partidas(13);

//Resultado
echo $mensaje;


//-------------------------------------------------------


/** MÓDULO 8: Dadas una colección de partidas y el nombre y el nombre de un jugador, retorna el índice de la primer partida ganada por dicho jugador. Si no ganó aún, retorna -1
 * @param INT $m8cantidadPartidas
 * @param STRING $m8usuario
 * @return INT el índice de la primer partida ganada por dicho jugador. Si no ganó aún, retorna -1
 */
function m8indicePartidaGanada ($m8cantidadPartidas, $m8usuario){
    //INT $r8indicePartidaGanada

    //Inicializo variable
    $r8indicePartidaGanada = 0;

    //Veo cuantos elementos tiene el arreglo
    $m8n = count($coleccionPartidas);
    
    //Contador
    $m8i = 0;

    //Recorrido parcial para ver si existe el usuario que se pide
    while ($m8i < $m8n && $usuario == "nombre"){
    $m8i = $m8i + 1;
    }
        if ($usuario == "nombre"){

            //Recorrido parcial para hallar la 1er partida ganada por el usuario
            while ($m8i < $m8n && $usuario == "nombre" && $puntaje != 0){
                if ($puntaje != 0){
                    $m8mensaje = "El índice de la primer partida ganada por ".$usuario." es: ".$m8n."\n";
                }else{
                    $m8mensaje = $usuario." no ganó ninguna partida, su índice es: -1\n";
                }
            $m8i = $m8i + 1;
            }

        }
    return $m8mensaje;
}


