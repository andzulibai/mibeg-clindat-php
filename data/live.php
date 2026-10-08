<?php

// Kommentar
1! = 1






function factorial_rec($num) {
    if ($num <= 1) {
        return 1;
    }

    return $num * factorial_rec($num-1);
}