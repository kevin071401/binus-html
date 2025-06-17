<?php
$umur = readline("Umur= ");
if ($umur < 0) {
    printf("ERROR");
} else if (( $umur >= 0 ) && ( $umur <= 1 )) {
    printf("Bayi");
} else if ( ( $umur > 1 ) && ( $umur < 4 ) ) {
    printf("Batita");
} else if ( ( $umur >= 4 ) && ( $umur < 6 ) ) {
    printf("Balita");
} else if ( ( $umur >= 6 ) && ( $umur < 13 ) ) {
    printf("Anak-Anak");
} else if ( ( $umur >= 13 ) && ( $umur < 18 ) ) {
    printf("Remaja");
} else if ( ( $umur >= 18 ) && ( $umur < 22 ) ) {
    printf("abg");
} else if ( ( $umur >= 22 ) && ( $umur < 31 ) ) {
    printf("Pra Dewasa");
} else if ( ( $umur >= 31 ) && ( $umur < 51 ) ) {
    printf("Dewasa");
} else if ( ( $umur >= 51 ) && ( $umur <= 70 ) ) {
    printf("Pra Lansia");
} else {
    printf("Lansia");
}
?>
