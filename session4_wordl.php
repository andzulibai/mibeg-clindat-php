//*START "$word
    versuche ← 0
    maximale_versuche ← 5

    SOLANGE versuche < maximale_versuche

        Eingabe tipp

        WENN Länge von tipp ≠ 5
            Ausgabe "Bitte 5 Buchstaben eingeben"
            WEITER
        ENDE WENN

        versuche ← versuche + 1

        WENN tipp = lösungswort
            Ausgabe "Gewonnen!"
            STOP
        ENDE WENN

        FÜR jede Position von 1 bis 5

            WENN Buchstabe an dieser Position
                 gleich dem Buchstaben im Lösungswort ist
                Ausgabe "Grün"
            
            SONST WENN Buchstabe im Lösungswort vorkommt
                Ausgabe "Gelb"
            
            SONST
                Ausgabe "Grau"
            ENDE WENN

        ENDE FÜR

        Ausgabe "Noch einmal versuchen"

    ENDE SOLANGE

    Ausgabe "Verloren!"
    Ausgabe "Das Lösungswort war: " + lösungswort

ENDE*//

<?php

$loesungswort = "APFEL";
$versuche = 0;

while ($versuche < 5) {

    $tipp = readline("Dein Tipp: ");

    if ($tipp[4] == "") {
        print "Bitte 5 Buchstaben eingeben!\n";
        continue;
    }

    $versuche++;

    if ($tipp == $loesungswort) {
        print "Gewonnen!\n";
        break;
    }

    for ($i = 0; $i < 5; $i++) {

        if ($tipp[$i] == $loesungswort[$i]) {
            print "Grün\n";
        }
        else {
            $gefunden = false;

            for ($j = 0; $j < 5; $j++) {
                if ($tipp[$i] == $loesungswort[$j]) {
                    $gefunden = true;
                }
            }

            if ($gefunden) {
                print "Gelb\n";
            }
            else {
                print "Grau\n";
            }
        }
    }

    print "Noch einmal versuchen!\n";
}

if ($tipp != $loesungswort) {
    print "Verloren!\n";
    print "Das Lösungswort war: $loesungswort\n";
}

?>


