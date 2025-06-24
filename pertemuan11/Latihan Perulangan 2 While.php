<?php
$choice = "y"

while (true) {
    $A = readline("Side A = ") ;
    $B = readline("Side B = ") ;
    $C = readline("Side C = ") ;
    if (choice == "y") {
        echo($A);echo("\n");
        echo($B);echo("\n");
        echo($C);echo("\n");
        if (($A <= 0) || ($B <= 0) || ($C <= 0)) {
            echo("Bukan Segitiga");echo("\n");
        } else if (($A == $B) && ($B == $C)) {
             echo("Segitiga Sama Sisi");echo("\n");
        } else if ((($A != $C) && ($A == $B)) || (($B != $C) && ($B == $A)) || (($A != $B) && ($B == $C)) || (($A != $B) && ($C == $B))) {
             echo("Segitiga Sama Kaki");echo("\n");
        } else if (($A + $B == $C) || ($A + $C == $B) || ($B + $C == $A)) {
             echo("Segitiga Siku-Siku");echo("\n");
        } else {
             echo("Segitiga Sembarang");echo("\n");
        }
    } else {
        echo("Program Berhenti");echo("\n");
        echo("Terima kasih telah menggunakan program saya");echo("\n");
        break;
    }
    $choice = readline("Ingin mengulanginya lagi? ");
}
?>
