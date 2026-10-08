/*
FUNKTION is_prime(zahl)

    WENN zahl kleiner als 2 DANN
        GIB false zurück
    ENDE WENN

    FÜR div von 2 bis zahl - 1
        WENN zahl MODULO div gleich 0 DANN
            GIB false zurück
        ENDE WENN
    ENDE FÜR

    GIB true zurück

ENDE FUNKTION



/*AnnasLösung
<?php


function is_prime(int $zahl): bool
{
    if ($zahl < 2) {
        return false;
    }

    for ($div = 2; 
        $div < $zahl; 
        $div++) 
        
        {
        if ($zahl % $div === 0) {
            return false;
        }
    }
    return true;
}

$zahl = 7;
$ergebnis = is_prime($zahl);

?>

*/

/*Andreas Lösung

function is_prime($num) {
for  ($i = $num - 1;
$i > 1;
$i -=1)
{
if ($num % $i === 0){
return false;
}
}
return true;
}

var_dump(is_prime (19))

Lenart lösung:
function is_prime (int $Zahl) {
    if ($Zahl < 2) {
        return false;
    }

    $i = 2;

    do {
        $i += 1;
    }
    while ($Zahl % $i !== 0);
    
    if ($i === $Zahl) {print_r($Zahl." ist eine Primzahl\n");}
    else {print_r($Zahl."ist teilbar durch". $i . PHP_EOL );}

    return $i;
}

is_prime(25);

*/

