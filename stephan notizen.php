<?php

// print "Hello, World!\n";

$text = "Hello, World!\n";

// print $text;

$number_of_people = 4; // Variablen, snake_case
define("PI", 3.14); // Konstanten

// var_dump(PI);

$number_of_people = 5;

// print "PI ist gleich = " . PI . "\n";
// print "PI ist gleich = " . PI . PHP_EOL;

/* Datentypen

Skalare
    - Numerisch (float, int)
    - Aphanumerisch (string)
    - Wahrheitswert (bool, Werte: true, false)
Nicht-skalare
    - Array (Liste)
    - null

(Konzepte:
    - Daten/Uhrzeiten (oft als integer umgesetzt)
    - Bilder/Grafiken/Dateien (binäre Daten)
    - Connections/Verbindung/Verknüpfung)
*/

// Zeichenketten/Strings

// print $text . PHP_EOL;

print 'Hello, World!\n

';

$name = "Stephan";
print "Hello, {$name}!\n";

?>