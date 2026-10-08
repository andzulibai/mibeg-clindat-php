<?php
function smaller(int $zahl1, int $zahl2) {
    if ($zahl1 < $zahl2) {
        return $zahl1;
    } else {
        return $zahl2;
    }
}
print smaller(5, 8);
?>

