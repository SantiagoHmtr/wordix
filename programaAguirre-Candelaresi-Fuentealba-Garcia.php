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
/**************************************/
 /** Obtiene una colección de palabras
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
/**************************************/
/**Inicializa con 10 partidas ya jugadas
* @return array // array indexado
*/
function cargarPartidas(){
    // array $coleccionPartidas // array indexado
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

/**************************************/
/*inciso 3 */
/**************************************/
/** Crea el menu de opciones del juego
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
/*inciso 4 */
/**************************************/
// La funcion esPalabra se encuentra en el archivo wordix.php

/**************************************/
/*inciso 5 */
/**************************************/
// La funcion solicitarNumeroEntre se encuentra en el archivo wordix.php

/**************************************/
/*inciso 6 */
/**************************************/  
/**
* Dado un número de partida, muestra en pantalla los datos de la partida
* @param INT $numeroPartida
* @return STRING Retorna un mensaje
*/
function mostrarDatosPartida($coleccionPartidas,$nroPartida){
    //$nroPartida = Solicitar entre (0, 9)
    //Recorrido parcial
    //$coleccionPartidas = cargarPartidas();
	
    div();
    //Muestra en pantalla el número de partida, la palabra con la que se jugó, el nombre del jugador y su puntaje.
    echo "Partida WORDIX ".($nroPartida+1).": palabra ".$coleccionPartidas[$nroPartida]["palabraWordix"]."\n";
    echo "Jugador: ".$coleccionPartidas[$nroPartida]["nombre"]."\n";
    echo "Puntaje: ".$coleccionPartidas[$nroPartida]["puntaje"]." puntos\n";

    //Muestra en pantalla si adivinó o no la palabra, basandose en el puntaje obtenido en esa partida.
    if ($coleccionPartidas[$nroPartida]["puntaje"] != 0){
        echo "Adivinó la palabra en ".$coleccionPartidas[$nroPartida]["cantIntentos"]." intentos\n";
    }else{
        echo "No adivinó la palabra\n";
    }
}

/**************************************/
/*inciso 7 */
/**************************************/
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
/*inciso 8 */
/**************************************/
/**
* Dadas una colección de partidas y el nombre de un jugador, retorna el índice de la primer partida ganada por dicho jugador. Si no ganó aún, retorna -1
* @param INT $cantidadPartidas
* @param STRING $usuario
* @return INT el índice de la primer partida ganada por dicho jugador. Si no ganó aún, retorna -1
*/
function indicePartidaGanada($partidas, $usuario){
    //Array vacío al que le asigno valores por medio de una estructura repetitiva, hasta encontrar el valor deseado y mostrarlo en pantalla
    $indicePrimeraVictoria = [];
    for ($i = 0; $i < count ($partidas); $i++) {
        if ($partidas[$i]["nombre"] == $usuario && ($partidas[$i]["puntaje"] > 0)) {
            $indicePrimeraVictoria = $i;
            $i = count ($partidas);
        }else{
            $indicePrimeraVictoria = -1;
        }
    }
    return $indicePrimeraVictoria;
}

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
/*inciso 10 */
/**************************************/
/**Esta funcion solicita el nombre del jugador y retorna el mismo nombre pero con los caracteres en minuscula
 * @return string
*/

function solicitarJugador(){
    // string $jugador, $nombre
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
/*inciso 11 */

/* La funcion ordenAlfabetico se encarga de ordenar alfabeticamente los nombres y luego las palabras wordix
*usando la funcion uasort, la cual requiere un array y una comparacion para definir como se desea el orden de
*las palabras, en este caso la funcion comparacionAlfabetica es la que nos permite ordenar primero por la clave
*"nombre" y luego por la clave "palabraWordix"
*/
function comparacionAlfabetica($partidas0, $partidas1){
    $asc = 0;
if ($partidas0["nombre"] == $partidas1["nombre"]) {   
      if ($partidas0["palabraWordix"] == $partidas1["palabraWordix"])  {
            $asc = 0;
      } 
      elseif ($partidas0["nombre"] == $partidas1["nombre"]){
        if ($partidas0["palabraWordix"] < $partidas1["palabraWordix"]){
            $asc = -1;

        }else { $asc = 1;}
      }
}   
elseif($partidas0["nombre"] < $partidas1["nombre"]){
        if($partidas0["palabraWordix"] < $partidas1["palabraWordix"]){
            $asc =-1;

    }
     

}
else{
    $asc = 1;
} 
return $asc;
}   

function ordenAlfabetico($partidasParaOrdenar) {   
    
    // la funcion ordenAlfabetico se encarga de llamar a la funcion uasort e imprimir con print_r
    uasort($partidasParaOrdenar , 'comparacionAlfabetica');
    print_r($partidasParaOrdenar);
}  



/**************************************/

/********************************************/
/* FUNCIONES ADICIONALES FUERA DEL PRACTICO */
/********************************************/
/**
*Dibuja una division en la pantalla
*/
function div(){
    echo "\n***********************************************************************\n";
}
/**
*Carga la partida recien jugada al array (Historial de partidas)
*@param array $coleccionPartidas // array indexado
*@param array $partida // array asociativo
*@return array // array asociativo
*/
function agregarPartida($coleccionPartidas,$partida)
{
    array_push($coleccionPartidas,["palabraWordix"=>$partida["palabraWordix"],
                                   "nombre"=>$partida["jugador"],
                                   "cantIntentos"=>$partida["intentos"],
                                   "puntaje"=>$partida["puntaje"]]);
    return $coleccionPartidas;
}
/** Funcion para comprobar si el jugador ya jugo con una palabra
 * @param array     $historialDePartidas, $coleccion DePalabras //array indexado
 * @param string    $palabra, $jugador
 * @return boolean
 */
function repitePalabra($historialDePartidas,$coleccionDePalabras,$palabra,$jugador)
{
    // boolean  $yaJugo
    // int      $maxP
    $maxP=count($historialDePartidas);
    $yaJugo=false;
    for($p=0;$p<$maxP;$p++){
        if ($historialDePartidas[$p]["palabraWordix"]==$coleccionDePalabras[$palabra]&&$historialDePartidas[$p]["nombre"]==$jugador){
            $yaJugo=true;
        }        
    }
    return $yaJugo;
}


//********************************************** */
/* Esta funcion verifica si al ingresar una palabra nueva en wordix, que no sea una repetida*/
/*La funcion predefinida in_array se utiliza para verificar si cierto valor no se encuentra en el array
*Como parametros tiene primero el valor que va a comparar con los del array ,y luego el array comparativo. */
//@param string $palabraIngresada
//@param array $coleccionPalabrasWordix
//@return string $palabraIngresada
//@var boolean $repetida
function verificarPalabraExistente ($palabraIngresada, $coleccionPalabrasWordix){
    do{
        if (in_array($palabraIngresada, $coleccionPalabrasWordix)){
            echo "La palabra ingresada ya se encuentra dentro del juego:\n ";
            $palabraIngresada = leerPalabra5Letras();
            $repetida = true;
        }elseif (!in_array($palabraIngresada, $coleccionPalabrasWordix)){
            $repetida = false;
        }
        
    }while($repetida == true );

    return $palabraIngresada;
}



//*********************************************** */
/** Funcion que devuelve mensaje de que usuario no esta en el historial de partidas
 * @param string $usuario
 */
function noJugoAun($usuario){
    div();
    echo "El jugador ".$usuario." aun no ha jugado Wordix! No registra ninguna partida.\n";
    div();  
}
/**
* Funcion sin parametros que solo detiene la ejecucion del programa para que el usuario vea los datos presentados
* en pantalla.
*/
function pausa(){
// string $pausa
    echo "\nPresione la tecla ENTER para continuar...";
    $pausa=fgets(STDIN);
}
/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/
/* Wordix es un Juego de palabras muy adictivo en el que tendrás que adivinar palabras. Tu tarea del usuario consiste en
resolver una palabra de cinco letras en seis intentos. */
//Declaración de variables:
// boolean  $jugo
// int      $opcion, $min, $palabraMax, $numeroPalabra, $partidaMax, $nroPartida, $porcentaje
// string   $nombreUsuario, $palabra
// array    $coleccionPalabras, $partidaNueva, $historialPartidas // array indexado
// array    $primerPartida, $resumenJ // array asociativo

//Inicialización de variables:
$jugo=false;
$opcion=0; $min=1; $palabraMax=0; $partidaMax=0; $numeroPalabra=0; $nroPartida=0; $porcentaje=0;
$nombreUsuario="wordix"; $palabra="wordix";
$partidaNueva=[]; $primerPartida=[]; $coleccionPalabras=[]; $historialPartidas=[]; $resumenJ=[]; $palabraNoRepetida ="";
//Proceso:
$coleccionPalabras=cargarColeccionPalabras();
$historialPartidas=cargarPartidas();
do {
    $opcion=seleccionarOpcion();
    switch ($opcion) {  //la funcion switch reemplaza al condicional if-elseif, no compara, si no que tiene una opcion para cada caso, 
                        //en caso de no tener COINCIDENCIA para el valor ingresado, el apartado "default" determina que hacer.
        case 1: 
            // 1) Jugar al Wordix con una palabra elegida
            $palabraMax=count($coleccionPalabras);
            div(); 
            $nombreUsuario=solicitarJugador();
            do{
            echo "Ingrese numero de palabra: ";
            $numeroPalabra=solicitarNumeroEntre($min,$palabraMax);
            $numeroPalabra--;
            $jugo=repitePalabra($historialPartidas,$coleccionPalabras,$numeroPalabra,$nombreUsuario);         
                if ($jugo==true){
                    echo "Esa palabra ya fue jugada, ingrese un numero distinto.\n";
                }
            }while($jugo!=null);
            $partidaNueva=jugarWordix($coleccionPalabras[$numeroPalabra],$nombreUsuario);
            $historialPartidas=agregarPartida($historialPartidas,$partidaNueva);
            pausa();
            break;
        case 2:
            // 2) Jugar al Wordix con una palabra aleatoria
            $palabraMax=count($coleccionPalabras);
            div(); 
            $nombreUsuario=solicitarJugador();
            do{
                $numeroPalabra=(int)rand($min, $palabraMax);
                $numeroPalabra--;
                $jugo=repitePalabra($historialPartidas,$coleccionPalabras,$numeroPalabra,$nombreUsuario);
                echo $numeroPalabra;         
            }while($jugo!=null);
            echo "Se eligio aleatoreamente la palabra numero: ".($numeroPalabra+1)."\n";
            $partidaNueva=jugarWordix($coleccionPalabras[$numeroPalabra],$nombreUsuario);
            $historialPartidas=agregarPartida($historialPartidas,$partidaNueva);
            pausa(); 
            break;
        case 3: 
            // 3) Mostrar una partida
            $partidaMax=count($historialPartidas);
            echo "Indique numero de partida a visualizar: ";
            $nroPartida=solicitarNumeroEntre($min,$partidaMax)-1;
            mostrarDatosPartida($historialPartidas,($nroPartida));
            div();
            pausa();
            break;
            //...
        case 4: 
            // 4) Mostrar la primer partida ganadora, solicita un nombre de jugador y devuelve la primer partida ganadora
            $nombreUsuario=solicitarJugador();
            $primerPartida=indicePartidaGanada($historialPartidas, $nombreUsuario);
            if ($primerPartida!=-1){
                div();
                mostrarDatosPartida($historialPartidas,$primerPartida);
                div();
            }else{
                noJugoAun($nombreUsuario);
            }
            pausa();
            break;
            //...
        case 5:
            // 5) Mostrar resumen de Jugador, pide nombre del jugador y llama una funcion que consulta al historial de partidas
            // devolviendo un array asosiativo ordenado en el formato solicitado con los datos del jugador.
            $nombreUsuario=solicitarJugador();
            $resumenJ=resumenJugador($historialPartidas,$nombreUsuario);
            if ($resumenJ["partidas"]!=0)
                {
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
            } else {
                noJugoAun($nombreUsuario);
                }
            pausa();
            break;
        case 6: 
            // 6) Mostrar listado de partidas ordenadas por jugador y por palabra
            echo "opcion 6";
            ordenAlfabetico($historialPartidas);
            pausa();
            break;
            //...
        case 7:
            // 7) Agregar una palabra de 5 letras a Wordix, usando la funcion "leerPalabra5Letras" obtiene una palabra toda
            // en mayuscula y la agrega al array $coleccionPalabras a traves de la funcion "agregarPalabra"
            //Se llama a la funcino verificarPalabraExistente para que al agregar una nueva palabra wordix, esta no este repetida.
            div();

            $palabra=leerPalabra5Letras();
            $palabraVerificada = verificarPalabraExistente($palabra, $coleccionPalabras);
            $coleccionPalabras=agregarPalabra($coleccionPalabras,$palabraVerificada);
            echo "Palabra agregada con exito!!!\n";
            
            div();
            
            pausa();
            break;
        case 8: 
            //Salir
            div();
            echo "Muchas gracias por jugar Wordix!!!\n";
            div();
            echo "Saliendo...";
            div();
            break;
        default:
            //Caso general para cuando no se ingresa ninguna de la opciones del menu.
            div();
            
            echo "ERROR!!! Ingrese una opcion correcta: \n";
            break;
    }
} while ($opcion != 8);
