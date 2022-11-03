<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/*
Apellido: Fuentealba
Nombre: Dario
Legajo: FAI-4424
Carrera: TUDW
mail: dariofuentealba1@gmail.com
Usuario Github: DarioFuentealba 
*/

/*
Apellido: Garcia
Nombre: Santiago
Legajo: FAI-1777
Carrera: TUDW
Email: santiagoramirogarcia97@gmail.com
Usuario Github: SantiagoHmtr
*/

/*
Apellido: Aguirre
Nombre: Alan Michel
Legajo: FAI-2635
Email: alanaguirre_09@hotmail.com
Usuario Github: AlanMichelAguirre
*/

/*
Apellido: Candelaresi
Nombre: Pedro
Legajo: 112758
Carrera: TUASySL
mail: pedro.candelaresi@est.fi.unco.edu.ar
Usuario Github: CandelaresiPedro
*/

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/
/**************************************/
/*inciso 1 */
/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "HIELO", "MANGO", "PIZZA", "PADRE", "HIJAS"
    ];
    //LISTO

    return ($coleccionPalabras);
}
/**************************************/
/*inciso 2 */
/**
*Inicializa con 10 partidas ya jugadas
*@param String $jugador,$palabraWordix
*@param int $intentos,$puntaje
*@return array
*/
function cargarPartidas(){
	$coleccionPartidas[0]=["palabraWordix"=>"QUESO","nombre"=>"majo","cantIntentos"=>0,"puntaje"=>0];
	$coleccionPartidas[1]=["palabraWordix"=>"CASAS","nombre"=>"rudolf","cantIntentos"=>3,"puntaje"=>14];
	$coleccionPartidas[2]=["palabraWordix"=>"QUESO","nombre"=>"pink2000","cantIntentos"=>6,"puntaje"=>10];
	$coleccionPartidas[3]=["palabraWordix"=>"FUEGO","nombre"=>"pink2000","cantIntentos"=>6,"puntaje"=>0];
	$coleccionPartidas[4]=["palabraWordix"=>"TINTO","nombre"=>"killer99","cantIntentos"=>5,"puntaje"=>3];
	$coleccionPartidas[5]=["palabraWordix"=>"PIANO","nombre"=>"majo","cantIntentos"=>0,"puntaje"=>0];
    $coleccionPartidas[6]=["palabraWordix"=>"HIELO","nombre"=>"majo","cantIntentos"=>3,"puntaje"=>12];
	$coleccionPartidas[7]=["palabraWordix"=>"VERDE","nombre"=>"yellow88","cantIntentos"=>0,"puntaje"=>2];
	$coleccionPartidas[8]=["palabraWordix"=>"RASGO","nombre"=>"pink2000","cantIntentos"=>1,"puntaje"=>9];
	$coleccionPartidas[9]=["palabraWordix"=>"FUEGO","nombre"=>"whoami99","cantIntentos"=>3,"puntaje"=>0];
    return $coleccionPartidas;
}
/**
*Carga la partida recien jugada al array (Historial de partidas)
*@param String $jugador,$palabraWordix
*@param int $intentos,$puntaje
*@return array
*/
function agregarPartida($palabraWordix,$jugador,$intentos,$puntaje)
{
    array_push($coleccionPartidas,["palabraWordix"=>$palabraWordix,"nombre"=>$jugador,"cantIntentos"=>$intentos,"puntaje"=>$puntaje]);
    return $coleccionPartidas;
}
/**************************************/
/*inciso 3 */
/**
* Crea el menu de opciones del juego
* Insiso 3
* @return int
*/
function seleccionarOpcion()
// int $opcion
{
    div();
    echo "Menú de opciones\n";
    div();
    echo "1) Jugar al Wordix con una palabra elegida\n";
    echo "2) Jugar al Wordix con una palabra aleatoria\n";
    echo "3) Mostrar una partida\n";
    echo "4) Mostrar la primer partida ganadora\n";
    echo "5) Mostrar resumen de Jugador\n";
    echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra\n";
    echo "7) Agregar una palabra de 5 letras a Wordix\n";
    echo "8) Salir\n";
    div();
    echo "Ingrese la opcion deseada: ";    
    $opcion = trim(fgets(STDIN));
    return $opcion;
}

/**************************************/




/**************************************/
/*inciso 4 */
/**
Verifica la longitud de una palabra y que todos sus caractéres sean alfabéticos
* @param STRING $cadena
* @return BOOLEAN $esLetra 
*/
function esPalabra($cadena)
{
    //INT $cantidadCaracteres, $i, BOOLEAN $esLetra
    $cantidadCaracteres = strlen($cadena);
    $esLetra = true;
    $i = 0;
    while ($esLetra && $i < $cantidadCaracteres) {
        $esLetra =  ctype_alpha($cadena[$i]);
        $i++;
    }
    return $esLetra;
}

/**************************************/
/**************************************/
/*inciso 5 */
/**
Pide al usuario un número entre un rango de valores. Si éste no es válido, se pide de nuevo
* @param INT $min
* @param INT $max
* @return INT Retorna un número válido
*/
function solicitarNumeroEntre($min, $max)
{
    //INT $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}

/**************************************/




/**************************************/
/*inciso 6 */  
ENCONTRE FALLA. COMO INVOCAR AL ARRAY COLECCION PARTIDAS QUE ESTA EN EXCEL +++++ CREO QUE LO RESOLVI
	OTRA FALLA: SI PIDO LA PARTIDA 5, VA AL INDICE 5, O SEA, EL INDICE 0 SERIA LA PARTIDA 0------------------------------------------------------------------------
/**
Dado un número de partida, muestra en pantalla los datos de la partida
* @param INT $numeroPartida
* @return STRING Retorna un mensaje
*/
function mostrarDatosPartida($nroPartida){
    //$nroPartida = Solicitar entre (0, 9)
    //Recorrido parcial
    //$coleccionPartidas = cargarPartidas();

		
    //VER QUE ESTE ARRAY ESTE BIEN COLOCADO ACA-----------------------------------------------------------------------------------------------
		
    $coleccionPartidas[0] = ["palabraWordix" => "QUESO", "jugador" => "majo", "intentos" => 0, "puntaje" => 0];
    $coleccionPartidas[1] = ["palabraWordix" => "MANGO", "jugador" => "rudolf", "intentos" => 3, "puntaje" => 14];
    $coleccionPartidas[2] = ["palabraWordix" => "QUESO", "jugador" => "pink2000", "intentos" => 6, "puntaje" => 10];
    $coleccionPartidas[3] = ["palabraWordix" => "Fuego", "jugador" => "pink2000", "intentos" => 6, "puntaje" => 0];
    $coleccionPartidas[4] = ["palabraWordix" => "PIZZA", "jugador" => "majo", "intentos" => 5, "puntaje" => 5];
    $coleccionPartidas[5] = ["palabraWordix" => "HIJAS", "jugador" => "majo", "intentos" => 3, "puntaje" => 5];

    echo "Partida WORDIX ".$nroPartida.": palabra ".$coleccionPartidas[$nroPartida]["palabraWordix"]."\n"
    echo "Jugador: ".$coleccionPartidas[$nroPartida]["jugador"]."\n";
    echo "Puntaje: ".$coleccionPartidas[$nroPartida]["puntaje"]." puntos\n";

    if ($coleccionPartidas[$nroPartida]["puntaje"] != 0){
        echo "Adivinó la palabra en ".$coleccionPartidas[$nroPartida]["intentos"]." intentos\n";
    }else{
        echo "No adivinó la palabra\n";
    }
}


/**************************************/




/**************************************/
/*inciso 7 */
/**
*Agrega palabras nuevas
*@param String $palabra
*@param array $coleccionPalabras
*@return array
*/
function agregarPalabra($coleccionPalabras,$palabra){
    array_push($coleccionPalabras,$palabra);
    return $coleccionPalabras;
}

/**************************************/
/**************************************/
/*inciso 8 */
/**
Dadas una colección de partidas y el nombre y el nombre de un jugador, retorna el índice de la primer partida ganada por dicho jugador. Si no ganó aún, retorna -1
* @param INT $cantidadPartidas
* @param STRING $usuario
* @return INT el índice de la primer partida ganada por dicho jugador. Si no ganó aún, retorna -1
*/
function indicePartidaGanada ($partidas, $usuario){
    $partidas[0] = ["palabraWordix" => "QUESO", "jugador" => "pimku", "intentos" => 2, "puntaje" => 5];
    $partidas[1] = ["palabraWordix" => "MANGO", "jugador" => "haimtor", "intentos" => 4, "puntaje" => 0];
    $partidas[2] = ["palabraWordix" => "GOTAS", "jugador" => "pedro", "intentos" => 5, "puntaje" => 5];
    $partidas[3] = ["palabraWordix" => "HIJAS", "jugador" => "haimtor", "intentos" => 2, "puntaje" => 5];
    $partidas[4] = ["palabraWordix" => "PADRE", "jugador" => "martin", "intentos" => 5, "puntaje" => 5];
    $partidas[5] = ["palabraWordix" => "PIZZA", "jugador" => "pimku", "intentos" => 3, "puntaje" => 5];
    $partidas[6] = ["palabraWordix" => "HIELO", "jugador" => "martin", "intentos" => 6, "puntaje" => 5];

    $indicePrimeraVictoria = [];
    echo "Ingrese el nombre del jugador: ";
    $usuario = trim(fgets(STDIN));

    for ($i = 0; $i < count ($partidas); $i++) {
        if ($partidas[$i]["jugador"] == $usuario && ($partidas[$i]["puntaje"] > 0)) {
            $indicePrimeraVictoria = $i;
            $i = count ($partidas);
        }
    }
    return $indicePrimeraVictoria;
}
/**************************************/




/**************************************/
/*inciso 9 */
function resumenJugador($matchHistory,$player)
// string   $history
{
    $cantPartidas=0;$puntajeTotal=0;$victorias=0;$intento1=0;$intento2=0;$intento3=0;$intento4=0;$intento5=0;$intento6=0;
    $i=0;
    $totalPartidas=count($matchHistory);
    for ($matchHistory[$i];$i<$totalPartidas;$i++)
    {
        if ($matchHistory[$i]["nombre"]==$player){
        $cantPartidas++;
        $puntajeTotal=$puntajeTotal+$matchHistory[$i]["puntaje"];
            if ($matchHistory[$i]["puntaje"]>0){
                $victorias++;
            }
            if ($matchHistory[$i]["cantIntentos"]==1){
                $intento1++;
            } elseif ($matchHistory[$i]["cantIntentos"]==2){
                $intento2++;
            } elseif ($matchHistory[$i]["cantIntentos"]==3){
                $intento3++;
            } elseif ($matchHistory[$i]["cantIntentos"]==4){
                $intento4++;
            } elseif ($matchHistory[$i]["cantIntentos"]==5){
                $intento5++;
            } elseif ($matchHistory[$i]["cantIntentos"]==6){
                $intento6++;
            }
        }
    }
    $resumen=[
        "nombre"=>$player,
        "partidas"=>$cantPartidas,
        "puntaje"=>$puntajeTotal,
        "victorias"=>$victorias,
        "intento 1"=>$intento1,
        "intento 2"=>$intento2,
        "intento 3"=>$intento3,
        "intento 4"=>$intento4,
        "intento 5"=>$intento5,
        "intento 6"=>$intento6];
    return $resumen;
}
/**************************************/




/**************************************/
/*inciso 10 */
/*Esta funcion solicita el nombre del jugador y retorna el mismo nombre pero con los caracteres en minuscula*/
/*@param null*/
/*@var string $jugador, $nombre */
/*@return string $jugador*/
function solicitarJugador(){
    /*Se utiliza la repetitiva do-while, para que la funcion genere iteraciones hasta que se ingrese
    *un nombre el cual su primer caracter sea una letra*/
    do{
        echo "Ingrese el nombre del jugador: ";
        $jugador = trim(fgets(STDIN));
        $primerCaracter = $jugador[0];
        if (ctype_alpha($primerCaracter)){
            return strtolower($jugador);
        }else{
            echo "El nombre del jugador DEBE iniciar con una letra, por favor, ingreselo nuevamente:\n";
            };
    }while(!ctype_alpha($primerCaracter));
}

/**************************************/




/**************************************/
/*inciso 11 */


/**************************************/
function div(){
    echo "***********************************************************************\n";
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/
/* Wordix es un Juego de palabras muy adictivo en el que tendrás que adivinar palabras. Tu tarea del usuario consiste en
resolver una palabra de cinco letras en seis intentos. */
//Declaración de variables:
// int      $opcion
// string   $nombreUsuario
// array    $coleccionPalabras

//Inicialización de variables:
$opcion=0;
$nombreUsuario="Wordix";
$coleccionPalabras=[];
$resumenJugador=[];
//Proceso:
// $partida = jugarWordix("MELON", strtolower("MaJo"));php
//print_r($partida);
//imprimirResultado($partida);
$coleccionPalabras=cargarColeccionPalabras();
$historialPartidas=cargarPartidas();
do {
    $opcion=seleccionarOpcion();
    switch ($opcion) {  //la funcion switch reemplaza al condicional if-elseif, no compara si no que tiene una opcion para cada caso, 
                        //en caso de no tener COINCIDENCIA para el valor ingresado, el apartado "default" determina que hacer.
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1
            $nombreUsuario=solicitarJugador();
            echo "opcion 1";
            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2
            echo "opcion 2";
            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3
            echo "opcion 3";
            break;
            //...
        case 4: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3
            echo "opcion 4";
            break;
            //...
        case 5:
            echo "Ingrese nombre de Jugador: ";
            $jugador=trim(fgets(STDIN)); 
            $resumenJ=resumenJugador($historialPartidas,$jugador);
            $porcentaje=(int)($resumenJ["victorias"]*100/$resumenJ["partidas"]);
            div();
            echo "Jugador: ".$resumenJ["nombre"]."\n";
            echo "Partidas: ".$resumenJ["partidas"]."\n";
            echo "Puntaje Total: ".$resumenJ["puntaje"]."\n";
            echo "Victorias: ".$resumenJ["victorias"]."\n";
            echo "Porcentaje Victorias: ".$porcentaje."%\n";
            echo "Adivinadas\n";
            echo "  Intento 1: ".$resumenJ["intento 1"]."\n";
            echo "  Intento 2: ".$resumenJ["intento 2"]."\n";
            echo "  Intento 3: ".$resumenJ["intento 3"]."\n";
            echo "  Intento 4: ".$resumenJ["intento 4"]."\n";
            echo "  Intento 5: ".$resumenJ["intento 5"]."\n";
            echo "  Intento 6: ".$resumenJ["intento 6"]."\n";
            div();
            break;
            //...
        case 6: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3
            echo "opcion 6";
            break;
            //...
        case 7:
            $palabra=leerPalabra5Letras();
            $coleccionPalabras=agregarPalabra($coleccionPalabras,$palabra);
            break;
            //...
        case 8: 
            //Salir
            echo "Muchas gracias por jugar Wordix!!!\n";
            break;
            //...          
        default :
            //Caso general para cuando no se ingresa ninguna de la opciones del menu.
            echo "ERROR!!! Ingrese una opcion correcta: \n";
            break;
    }
} while ($opcion != 8);
