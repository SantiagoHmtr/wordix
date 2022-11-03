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
function palabraEs($cadena) /* le cambie el nombre de esPalabra a palabraEs 
por que en wordix.php hay una funcion con el mismo nombre */
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
/*inciso 5 */
/**************************************/
// La funcion solicitarNumeroEntre se encuentra en el archivo wordix.php

/**************************************/
/*inciso 6 */
/**************************************/  
//ENCONTRE FALLA. COMO INVOCAR AL ARRAY COLECCION PARTIDAS QUE ESTA EN EXCEL +++++ CREO QUE LO RESOLVI
//	OTRA FALLA: SI PIDO LA PARTIDA 5, VA AL INDICE 5, O SEA, EL INDICE 0 SERIA LA PARTIDA 0----------//--------------------------------------------------------------
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

    echo "Partida WORDIX ".$nroPartida.": palabra ".$coleccionPartidas[$nroPartida]["palabraWordix"]."\n"; //faltaba punto y coma
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
/**************************************/
/**
 * Funcion que retorna el historial de un jugador en un array asosiativo a partir del historial de partidas almacenado
 * @param array $matchHistory //array indexado
 * @param string $player
 * @return array //array asosiativo
*/
function resumenJugador($matchHistory,$player){
    // int $totalPartidas, $i
    // array $resumen //array asosiativo
    $totalPartidas=0;
    $resumen=["nombre"=>$player,
              "partidas"=>0,
              "puntaje"=>0,
              "victorias"=>0,
              "intento 1"=>0,
              "intento 2"=>0,
              "intento 3"=>0,
              "intento 4"=>0,
              "intento 5"=>0,
              "intento 6"=>0];
    $totalPartidas=count($matchHistory);
    for ($i=0;$i<$totalPartidas;$i++)
    {
        if ($matchHistory[$i]["nombre"]==$player){
        $resumen["partidas"]++;
        $resumen["puntaje"]=$resumen["puntaje"]+$matchHistory[$i]["puntaje"];
            if ($matchHistory[$i]["puntaje"]>0){
                $resumen["victorias"]++;
            }
            if ($matchHistory[$i]["cantIntentos"]==1){
                $resumen["intento 1"]++;
            } elseif ($matchHistory[$i]["cantIntentos"]==2){
                $resumen["intento 2"]++;
            } elseif ($matchHistory[$i]["cantIntentos"]==3){
                $resumen["intento 3"]++;
            } elseif ($matchHistory[$i]["cantIntentos"]==4){
                $resumen["intento 4"]++;
            } elseif ($matchHistory[$i]["cantIntentos"]==5){
                $resumen["intento 5"]++;
            } elseif ($matchHistory[$i]["cantIntentos"]==6){
                $resumen["intento 6"]++;
            }
        }
    }
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
function mostrarPalabras($coleccionPalabras, $cantidadPalabras){
    for($j=0;$j<$cantidadPalabras;$j++){
        echo ($j+1)." - ".$coleccionPalabras[$j]."\n";
    }
}
/**************************************/
function div(){
    echo "\n***********************************************************************\n";
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/
/* Wordix es un Juego de palabras muy adictivo en el que tendrás que adivinar palabras. Tu tarea del usuario consiste en
resolver una palabra de cinco letras en seis intentos. */
//Declaración de variables:
// int      $opcion
// string   $nombreUsuario, $palabra
// array    $coleccionPalabras,$historialPartidas // array indexado
// array    $resumenJugador // array

//Inicialización de variables:
$opcion=0;
$nombreUsuario="Wordix";
$palabra="Wordix";
$coleccionPalabras=[];
$historialPartidas=[];
$resumenJugador=[];
//Proceso:
$coleccionPalabras=cargarColeccionPalabras();
$historialPartidas=cargarPartidas();
do {
    $opcion=seleccionarOpcion();
    switch ($opcion) {  //la funcion switch reemplaza al condicional if-elseif, no compara, si no que tiene una opcion para cada caso, 
                        //en caso de no tener COINCIDENCIA para el valor ingresado, el apartado "default" determina que hacer.
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1
            $palabraMax=count($coleccionPalabras);
            div(); 
            $nombreUsuario=solicitarJugador();
            escribirMensajeBienvenida($nombreUsuario);
            $numeroPalabra=solicitarNumeroEntre(1,$palabraMax)-1;
            $partidaNueva=jugarWordix($coleccionPalabras[$numeroPalabra],$nombreUsuario);
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
            // 5) Mostrar resumen de Jugador, pide nombre del jugador y llama una funcion que consulta al historial de partidas
            // devolviendo un array asosiativo ordenado en el formato solicitado con los datos del jugador.
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
        case 6: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3
            echo "opcion 6";
            break;
            //...
        case 7:
            // 7) Agregar una palabra de 5 letras a Wordix, usando la funcion "leerPalabra5Letras" obtiene una palabra toda
            // en mayuscula y la agrega al array $coleccionPalabras a traves de la funcion "agregarPalabra"
            div();
            $palabra=leerPalabra5Letras();
            $coleccionPalabras=agregarPalabra($coleccionPalabras,$palabra);
            div();
            echo "Palabra agregada con exito!!!\n";
            break;
        case 8: 
            //Salir
            div();
            echo "Muchas gracias por jugar Wordix!!!\n";
            break;
        default :
            //Caso general para cuando no se ingresa ninguna de la opciones del menu.
            div();
            echo "ERROR!!! Ingrese una opcion correcta: \n";
            break;
    }
} while ($opcion != 8);