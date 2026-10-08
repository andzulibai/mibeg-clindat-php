function factorial_loop($n) {
    $result = 1;

    if ($n < 1) {
        return 0;
    }
    // Start mit 2 um die idempotente Berechnung „Multiplikation mit 1“ zu überspringen
    for ($i=2; $i <= $n; $i++) { 
        $result = $result * $i;
    }

    return $result;
}

//======//


