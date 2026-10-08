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

<?php

// Das ist ein einzeiliger Kommentar

# Das ist ebenfalls ein einzeiliger Kommentar

/*
    Das ist ein
    mehrzeiliger Kommentar
*/

//Java script

<!-- <script>
    // Ab hier JS code
    /* Kommentar
    Beispiel
    */
    // print echo, war-dumb "console.log"

        let title = "Unsere tolle Web-Application "
        const num = 10;
        console.log (title);

        let greeting = "Hello, ";
        let name = "Anna";
        console.log (greeting + name)

        if (3 < 5) {
        console.log ("3 ist kleiner als 5"); }
        else {
        }
        for (let index = 0; index < 10; index++){
        console.log (index);}
        
        function add(a,b) {
            return a+b;
        }

        function sub(a,b) {
            return a-b;
        }

        const ShoppingList = ["Milch" , "Gurke", true, 5, 3,15]; 

        for (let index = 0; index < ShoppingList.length; index++){
        const element = ShoppingList [index];
        console.log (element);
        }

    document.querySelector ("h1")
    -um was verändern auf der internet Seite unter inspect, 
    </script> -->
