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

//echo produit(1,2,3,4,5,0,-1);
$som = 0;
$produit = 1;
function sommeProduit($arg1, $arg2, &$som, &$produit) {
    $som = $arg1 + $arg2;
    $produit = $arg1 * $arg2;
    echo "In sommeProduit somme = $som et produit = $produit<br>";
}

//sommeProduit(10, 15, $som, $produit );
//echo "Après sommeProduit somme = $som et produit = $produit<br>";

function extractTypeFromTab(array $tableau, string $type): array {
    $fonction = "is_$type";
    $newTab = [];
    if (function_exists($fonction)) {
        foreach ($tableau as $value) {
            if ($fonction($value)) {
                $newTab[] = $value;
            }
        }
    } else {
        echo 'Please verify your type';
    }
    return $newTab;
}
$tab = [1,false, 2, true, "aymen", [1,2,3], "houda", "wassef", ["test"]];
var_dump(extractTypeFromTab($tab, 'array'));