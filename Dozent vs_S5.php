<?php

/**
 * $nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
 * 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
 * var_dump(array_reduce($nums,fn($c, $n)=>
 * ["a"=>$n>$c["a"]?$n:$c["a"],"b"=>$n<$c["b"]?$n:$c["b"],"c"
 * =>$c["c"]+$n/count($nums)],
 * ["a"=>$nums[0],"b"=>$nums[0],"c"=>0]));
 */

$nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$result = array_reduce(
    // Array, das wir verarbeiten
    $nums,
    
    // Verarbeitungsfunktion
    fn($c, $n) => [
        "max" => $n > $c["max"] ? $n : $c["max"],
        "min" => $n < $c["min"] ? $n : $c["min"],
        "avg" => $c["avg"] + $n / count($nums)
    ],
    
    // Startwert
    [
        "max" => $nums[0],
        "min" => $nums[0],
        "avg" => 0
    ]
);

// var_dump($result);

// Schwer verständlich, sehr verschachtelt, einfacher lesbar wäre wünschenswert
// Funktionsaufruf, Min/Max/Avg, Variablennamen schwer lesbar
// array_reduce = Kalkulation, Ergebnis ist ein einziger Wert
//   Frage: Woher kommen $c und $n?
// fn = Arrow-Funktion ( => ), anonyme Funktion

