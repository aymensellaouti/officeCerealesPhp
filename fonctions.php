<?php

function somme() {
    $s = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        $s += func_get_arg($i);
    }
    echo "La somme est : $s<br>";
    return $s;
}
//
//somme(20,30, 50, 15480);

function testArgs($name, $firstname,...$mesParams) {
    $s = 0;
    echo "Bonjour $name $firstname <br>";
    foreach ($mesParams as $arg) {
        $s+=$arg;
    }
    echo "La somme est : $s<br>";
    return $s;
}

testArgs('sellaouti', 'aymen',20,30, 50, 15480);

function produit(...$args) {
    $prod = 1;

    foreach ($args as $value) {
        if ($value) {
            $prod *= $value;
        }

    }
    return $prod;
}

echo produit(1,2,3,4,5,0,-1);