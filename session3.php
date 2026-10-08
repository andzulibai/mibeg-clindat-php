/*Session3*/

//*FUNKTION is_palindrom(word):
    rückwärts ← word umdrehen

    WENN word gleich rückwärts IST:
        GIB true ZURÜCK
    SONST:
        GIB false ZURÜCK
ENDE FUNKTION*//

<?php

function is_palindrom(string $word): bool
{
    return $word === strrev($word);
}

var_dump(is_palindrom("anna"));       // bool(true)
var_dump(is_palindrom("Otto"));       // bool(true)
var_dump(is_palindrom("haus"));       // bool(false)


/**function is_palindrome($word) {
    return strtolower(strrev($word)) === strtolower($word);
}

$word = readline("Gib ein Wort ein um zu prüfen, ob es ein Palindrom ist: ");

print $word . PHP_EOL; */

/*Session3_Aufgabe */

function is_palindrome($word) {
    return strtolower(strrev($word)) === strtolower($word);
}

do {
    $word = readline("Gib ein Wort ein um zu prüfen, ob es ein Palindrom ist: ");
    var_dump(is_palindrome($word));
} while (true);

/*SEssion3_Aufgabe c */

function is_palindrome($word) {
    $wordLower = strtolower($word);
    $wordLettersOnly = str_replace([',', '!', ' ', '.'], "", $wordLower);
    
    return strrev($wordLettersOnly) === $wordLettersOnly;
}


function is_palindrome($word) {
    $wordLower = strtolower($word);
    $wordLettersOnly = preg_replace("/[^a-z]/", "", $wordLower);
    
    return strrev($wordLettersOnly) === $wordLettersOnly;
}


/*SEssion3_Aufgabe 2 */

function fizzbuzz($num) {
	for ($i = 1; $i <= $num; $i++) {
		$isFizz = $i % 3 === 0;
		$isBuzz = $i % 5 === 0;
		$fizzBuzz = ($isFizz ? "fizz" : "") . ($isBuzz ? "buzz" : "");
		print (!empty($fizzBuzz) ? $fizzBuzz : $i) . PHP_EOL;
	}
}

<?php
function fizzbuzz(int $num): array
{
    for ($i = 1; $i <= $num; $i++) {
        $text = $i;

        if ($i % 3 == 0) {
            $text = "fizz";
        }

        if ($i % 5 == 0) {
            $text = "buzz";
        }

        if ($i % 15 == 0) {
            $text = "fizzbuzz";
        }

        $ergebnis[] = $text;
    }
    return $ergebnis;
}
$ergebnis = fizzbuzz(20);


function fizzbuzz($num) {
	for ($i = 1; $i <= $num; $i++) {
		$isFizz = $i % 3 === 0;
		$isBuzz = $i % 5 === 0;
		$fizzBuzz = ($isFizz ? "fizz" : "") . ($isBuzz ? "buzz" : "");
		print (!empty($fizzBuzz) ? $fizzBuzz : $i) . PHP_EOL;
	}
}

fizzbuzz(20);


<?php

$var = 5;

$arr = [5, "Stephan", "Max", "Köln", true];
$arr2 = array(5, "Stephan", "Max", "Köln", true);

var_dump($arr);

// Element hinzufügen
$arr[] = 42;

print "Das Array hat " . count($arr) . " Elemente.";

array_push($arr, 13, false, "Hallo");

var_dump($arr);


<?php

$arr = [5, "Peter", "Alina", "Köln", true, "Hallo"];
//      0  1        2        3       4     5

$index = 0;

while ($index < count($arr)) {
    var_dump($arr[$index]);
    $index++;
}


<?php

$arr = [5, 42, 17, 13, -5, 145, 13.56, 0.2, 12];

$index = 0;
$size = count($arr);
$sum = 0; // Akkumulator, Akku, acc

while ($index < $size) {
    $sum = $sum + $arr[$index];
    $index++;
}

/*
=== Ablaufprotokoll ===

while:
    $index = 0, $sum = 0
        $sum = 0 + 5 = 5
        $index = 1
    
    $index = 1, $sum = 5
        $sum = 5 + 42 = 47
        $index = 2

    $index = 2, $sum = 47
        $sum = 47 + 17 = 64
        $index = 3
*/

print 'Durchschnitt von $arr: ' . ($sum/$size) . PHP_EOL;


<?php

$arr = [5, 42, 17, 13, -5, 145, 13.56, 0.2, 12];

$sum = 0;

for ($i=0; $i < count($arr); $i++) { 
    $sum = $sum + $arr[$i];
}

print 'Durchschnitt von $arr: ' . ($sum/count($arr)) . PHP_EOL;



<?php

$arr = [5, 42, 17, 13, -5, 145, 13.56, 0.2, 12];

$sum = 0;

for ($i=0; $i < count($arr); $i++) { 
    $sum = $sum + $arr[$i];
}

print 'Durchschnitt von $arr: ' . ($sum/count($arr)) . PHP_EOL;


<?php

require_once("lib.php");

// $arr = [5, 42, 17, 13, -5, 145, 13.56, 0.2, 12];

$potentialPalindromes = [
    "Sit on a potato pan, Otis!",
    "Ein Sachse mit Gazelle sagt im Regen nie.",
    "Swap God for a janitor; rot in a jar of dog paws.",
    "Anna hetzte Hanna.",
    "Bananarama",
    "Reib, Tim, eine Brandnarbe nie mit Bier!",
    "Leg Raps ein, nie Spargel."
];

foreach ($potentialPalindromes as $p) {
    print (is_palindrome($p) ? "✅ " : "❌ ") . $p . PHP_EOL;
}
