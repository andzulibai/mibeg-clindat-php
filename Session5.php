
// Höherwertige Funktionen, funktionale Programmierung

$input = [1, 2, 3, 4, 5, 6];

$output1 = array_filter($input, "filter_even");

var_dump($output1);

//*Funktionsdeklaration function filter_even($num) {return $num % 2 === 0;} //*

// Höherwertige Funktionen, funktionale Programmierung

$output1 = array_filter($input, "filter_even");



// Funktionsausdruck

$input = [1, 2, 3, 4, 5, 6];

$filter_even = function($num) {
    return $num % 2 === 0;
};

$output2 = array_filter($input, $filter_even);

$output3 = array_filter($input, function($num) { return $num % 2 === 0; });

$output4 = array_filter($input, fn($num) => $num % 2 === 0);

var_dump($output1);

/* ========== */

function factorial_rec($num) {
    if ($num <= 1) {
        return 1;
    }

    return $num * factorial_rec($num-1);
}

/* 

