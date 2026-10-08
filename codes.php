//Polidrome

<?php
$name = "anna";
$anna = true;

var_dump ($anna);
var_dump($name);

var_dump($name === strrev($name));
?>

// oder zweite Variante mit groß/klien Buchstaben

$checkForPalindrome = "Anna";

print PHP_EOL . "❓ Ist '$checkForPalindrome' ein Palindrom?" . PHP_EOL . PHP_EOL;
var_dump(
    strtolower($checkForPalindrome) === strrev(strtolower($checkForPalindrome))
);

// condition



$age = readline("Wie alt bist du?");
print $age;

if ($age >= 67) {
    print "Willkommen in der Rente";
}
elseif ($age >= 18) {
    print "Yeah, du bist volljährig!" . PHP_EOL;
    print "Du kommst rein!";
}
else {
    print "Du kommst hier nicht rein!";
}

print PHP_EOL;

// switch, ifelse



$country = readline("Hauptstadt von: ");

// Imperativ

if ($country === "Niederlande") {
    print "Amsterdam" . PHP_EOL;
}
elseif ($country === "Deutschland") {
    print "Berlin" . PHP_EOL;
}
elseif ($country === "Costa Rica") {
    print "San Jose" . PHP_EOL;
}
elseif ($country === "USA") {
    print "Washington DC" . PHP_EOL;
}
else {
    print "Land nicht gefunden" . PHP_EOL;
}

// Deklarativ

switch ($country) {
    case "Niederlande":
        print "Amsterdam" . PHP_EOL;
        break;
    case "Deutschland":
        print "Berlin" . PHP_EOL;
        break;
    case "Costa Rica":
        print "San Jose" . PHP_EOL;
        break;
    case "USA":
        print "Washington DC" . PHP_EOL;
        break;
    default:
        print "Land nicht gefunden" . PHP_EOL;
}

// Deklarativ

$capital = match ($country) {
    "Niederlande" => "Amsterdam",
    "Deutschland" => "Berlin",
    "Costa Rica" => "San Jose",
    "USA" => "Washington DC",
    default => "Land nicht gefunden"
};

print $capital . PHP_EOL;

//Funktionen
//________erste option bsp____________


function which_is_smaller( int $zahl1, int $zahl2) {
    return min($zahl1, $zahl2);
}

$nummer = which_is_smaller(4, 2);

var_dump($nummer);


//________zweite option bsp____________


function smaller(int $zahl1, int $zahl2) {
    if ($zahl1 < $zahl2) {
        return $zahl1;
    } else {
        return $zahl2;
    }
}

print smaller(5, 3);
?>


//08Sep2026

<?php

// Schleifen

$counter = 10;

// while ($counter >= 0) {
//     print "$counter" . PHP_EOL;
//     // $counter = $counter - 1;
//     // $counter -= 1;
//     $counter--; // $counter++;
// }

// do {
//     print "$counter" . PHP_EOL;
//     $counter--;
// }
// while ($counter >= 20);

do {
    $pin = readline("Willkommen zum Online-Banking. Ihre PIN bitte: ");
} while ($pin !== "cancel");


//andere Bsp
$counter = 10;

while (true) {
    $counter++;

    if ($counter % 5 === 0) {
        print "$counter ist durch 5 teilbar" . PHP_EOL;
    }

    print $counter . PHP_EOL;

    if ($counter >= 50) {
        print "Schleife beendet." . PHP_EOL;
        break;
    }
}


<?php

// Schleifen

$counter = 0;

// while ($counter >= 0) {
//     print "$counter" . PHP_EOL;
//     // $counter = $counter - 1;
//     // $counter -= 1;
//     $counter--; // $counter++;
// }

// while (true) {
//     $counter++;

//     if ($counter % 5 === 0) {
//         print "$counter ist durch 5 teilbar" . PHP_EOL;
//     }

//     print $counter . PHP_EOL;

//     if ($counter >= 50) {
//         print "Schleife beendet." . PHP_EOL;
//         break;
//     }
// }

// do {
//     print "$counter" . PHP_EOL;
//     $counter--;
// }
// while ($counter >= 20);

// do {
//     $pin = readline("Willkommen zum Online-Banking. Ihre PIN bitte: ");
// } while ($pin !== "cancel");

// for (
//     $i=0; // Startwert
//     $i < 10; // Abbruchbedingung
//     $i += 2 // Step-Funktion
// ) {
//     print "$i\n";
// }



// $num = 42;
// $text = "Tschüss";
// $external = true;

// function test($num, $text) {
//     global $external;
//     print "Innerhalb der Funktion: \$num = $num und \$text = $text\n";
// }

// test(12, "Hallo");

// print "Außerhalb der Funktion: \$num = $num und \$text = $text\n";

// $num = 42;

// function test_func($num) {
//     $num = 13;
// }

// test_func($num);

// print $num . PHP_EOL;

// $num = 42;

// function test_func(&$peter) {
//     $peter = 13;
// }

// test_func($num);

// print $num . PHP_EOL;


$n1 = 42;
$n2 = &$n1;

print $n1 . PHP_EOL;

$n2 = 13;

print $n1 . PHP_EOL;


<?php

$arr = [5, 42, 17, 13, -5, 145, 13.56, 0.2, 12];

$min = $arr[0];
$max = $arr[0];

/*
Iteration 1: $min = 5, $max = 5, $num = 5
    $min = 5, $max = 5

Iteration 2: $min = 5, $max = 5, $num = 42
    $min = 5, $max = 42, $num = 5
*/

foreach ($arr as $num) {
    if ($num > $max) {
        $max = $num;
    }
    if ($num < $min) {
        $min = $num;
    }
}

print "Min: " . $min . "\nMax: " . $max . PHP_EOL;
