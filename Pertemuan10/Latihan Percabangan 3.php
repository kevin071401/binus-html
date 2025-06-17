<?php
$suhu = readline("Suhu= ");
echo($suhu);echo("\n");
echo("");echo("\n");
echo("Ganti Suhu");echo("\n");
echo("1. Celcius ke Fahrenheit");echo("\n");
echo("2. Celcius ke Kelvin");echo("\n");
echo("3. Fahrenheit ke Celcius");echo("\n");
echo("4. Fahrenheit ke Kelvin");echo("\n");
echo("5. Kelvin ke Celcius");echo("\n");
echo("6. Kelvin ke Fahrenheit");echo("\n");
echo("");echo("\n");
$kon = readline("Pilihan Konversi = ");
if ($kon > 6){
    printf("error");
} else if ($kon == 1){
    printf((9/5 * $suhu) + 32 );
} else if ($kon == 2){
    printf($suhu + 273.15);
} else if ($kon == 3){
    printf(5/9 * ($suhu - 32));
} else if ($kon == 4){
    printf((5/9 * ($suhu - 32)) + 273.15 );
} else if ($kon = 5){
    printf($suhu - 273.15 );
} else {
    printf((9/5 * ($suhu - 273.15)) + 32 );
}
?>
