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
function cargarPartidas($palabraWordix,$jugador,$intentos,$puntaje){
	$coleccionPartidas[0]=["palabraWordix"=>"QUESO","nombre"=>"majo","cantIntentos"=>0,"puntaje"=>0];
	$coleccionPartidas[1]=["palabraWordix"=>"CASAS","nombre"=>"rudolf","cantIntentos"=>3,"puntaje"=>14];
	$coleccionPartidas[2]=["palabraWordix"=>"QUESO","nombre"=>"pink2000","cantIntentos"=>6,"puntaje"=>10];
	$coleccionPartidas[3]=["palabraWordix"=>"FUEGO","nombre"=>"pink2000","cantIntentos"=>6,"puntaje"=>0];
	$coleccionPartidas[4]=["palabraWordix"=>"TINTO","nombre"=>"killer99","cantIntentos"=>5,"puntaje"=>3];
	$coleccionPartidas[5]=["palabraWordix"=>"PIANO","nombre"=>"majo","cantIntentos"=>0,"puntaje"=>0];
	$coleccionPartidas[7]=["palabraWordix"=>"VERDE","nombre"=>"yellow88","cantIntentos"=>0,"puntaje"=>2];
	$coleccionPartidas[8]=["palabraWordix"=>"RASGO","nombre"=>"pink2000","cantIntentos"=>1,"puntaje"=>9];
	$coleccionPartidas[9]=["palabraWordix"=>"FUEGO","nombre"=>"whoami99","cantIntentos"=>3,"puntaje"=>0];
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
    echo "\n------------------------------------------------------------------\n";
    echo "Menú de opciones\n";
    echo "------------------------------------------------------------------\n";
    echo "1) Jugar al Wordix con una palabra elegida\n";
    echo "2) Jugar al Wordix con una palabra aleatoria\n";
    echo "3) Mostrar una partida\n";
    echo "4) Mostrar la primer partida ganadora\n";
    echo "5) Mostrar resumen de Jugador\n";
    echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra\n";
    echo "7) Agregar una palabra de 5 letras a Wordix\n";
    echo "8) Salir\n";
    echo "------------------------------------------------------------------\n";
    echo "Ingrese la opcion deseada: ";    
    $opcion = trim(fgets(STDIN));
    return $opcion;
}

/**************************************/




/**************************************/
/*inciso 4 */


/**************************************/
/**************************************/
/*inciso 5 */


/**************************************/




/**************************************/
/*inciso 6 */


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


/**************************************/




/**************************************/
/*inciso 9 */
function resumenJugador($partidasColeccion,$jugador)
{

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
$resumenPartidas=[];
//Proceso:
// $partida = jugarWordix("MELON", strtolower("MaJo"));php
//print_r($partida);
//imprimirResultado($partida);
$coleccionPalabras=cargarColeccionPalabras();
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
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3
            echo "opcion 5";
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