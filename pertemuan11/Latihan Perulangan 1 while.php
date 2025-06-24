<?php
$choice = "y";
$angka = readline("Contoh Angka ");

while (true) {
    if ($choice == "y") {
        echo($angka);echo("\n");
        if ($angka % 2 == 0) {
            echo("angka $angka adalah bilangan genap");echo("\n");echo("\n");
        } else {
            echo("angka $angka adalah bilangan ganjil");echo("\n");
        }
    }else {
        echo("Program Berhenti\n");
        echo("Terima kasih telah menggunakan program saya\n");
        break;
    }
    $choice = readline("Ingin mengulanginya lagi? ");
} 
?>
