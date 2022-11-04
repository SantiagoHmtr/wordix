<?php


//MUESTRO ORIGINAL Y NUEVA PARA QUE VEAN DIFERENCIAS

/*PROBE INGRESANDO LOS SIGUENTES DATOS:
    1) Nro < $min
    2) Nro > $max
    3) 16.5
    4) a) a
       b) A
       c)aetsgdhhf
    5) 16gdsfdgfhgkj
    6) 16
    7) Los extremos, que en mi caso fueron $min = 15 y $max = 20
    
LOS UNICOS QUE FUNCIONARON FUERON LOS PUNTOS 6) y 7)


HAY echo QUE ESTÁN DE MÁS, SON PARA VER QUE VALOR LARGA Y COMO ESTÁ TRABAJANDO EL PROGRAMA
*/



/*
+++++++++++++++++++++++++++++++++++++++
ESTA ES LA ORIGINAL
+++++++++++++++++++++++++++++++++++++++
*/  
    /** Pide al usuario un número entre un rango de valores. Si éste no es válido, se pide de nuevo
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






/*
+++++++++++++++++++++++++++++++++++++++
ESTA ES LA QUE HICE
+++++++++++++++++++++++++++++++++++++++
*/

/** Pide al usuario un número entre un rango de valores. Si éste no es válido, se pide de nuevo
 * @param INT $min
 * @param INT $max
 * @return INT Retorna un número válido
 */
function solicitarNumeroEntre($min, $max)
{
    echo "ingrese un numero entero entre ".$min." y ".$max.": ";
    $numero = trim(fgets(STDIN));
    echo "numero: ".$numero."\n";
    echo "\n";

        while (!ctype_digit($numero) || $numero < $min || $numero > $max) {
            echo "Debe ingresar un número entero entre " . $min . " y " . $max . ": ";
            $numero = trim(fgets(STDIN));
            echo "\n";
            echo "El numero es: ".$numero."\n";
        }
    echo "El numero final es: ".$numero."\n";

    return $numero;
}
