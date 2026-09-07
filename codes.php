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

<?php

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

<?php

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

<?php
function which_is_smaller($zahl1, $zahl2) {
    return min($zahl1, $zahl2);
}

$nummer = which_is_smaller(4, 2);

var_dump($nummer);
?> 

//________zweite option bsp____________

<?php
function smaller($zahl1, $zahl2) {
    if ($zahl1 < $zahl2) {
        return $zahl1;
    } else {
        return $zahl2;
    }
}

print smaller(5, 3);
?>