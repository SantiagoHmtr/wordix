<?php
/**
*Inicializa con 10 partidas ya jugadas
*@param String $palabraWordix
*@param int $jugador,$intentos,$puntaje
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
?>