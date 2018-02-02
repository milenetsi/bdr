<?php

//Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima
//“Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos
//de ambos (3 e 5), imprima “FizzBuzz”.
function questao1()
{
    for ($i = 1; $i <= 100; $i++) {
        $multiplo = false;

        if ($i % 3 == 0) {
            echo 'Fizz';
            $multiplo = true;
        }
        if ($i % 5 == 0) {
            $multiplo = true;
            echo 'Buzz';
        }

        if (!$multiplo) {
            echo $i;
        }
        echo '<br/>';
    }
}


questao1();
