<?php
function f_inijudul(){
    echo("Kevin Julius Siahaan\nSurabaya");
}
function fg_int_tambah($nilai1 = 0, $nilai2 =0){
    $l_int_hasil = $nilai1 + $nilai2;
     return $l_int_hasil;
}
function fg_int_kurang($nilai1 = 0, $nilai2 =0){
    $l_int_hasil = $nilai1 - $nilai2;
     return $l_int_hasil;
}
function fg_int_bagi($nilai1 = 0, $nilai2 =0){
    $l_int_hasil = $nilai1 / $nilai2;
     return $l_int_hasil;
}
function fg_int_kali($nilai1 = 0, $nilai2 =0){
    $l_int_hasil = $nilai1 * $nilai2;
     return $l_int_hasil;
}
function fg_int_sisabagi($nilai1 = 0, $nilai2 =0){
    $l_int_hasil = $nilai1 % $nilai2;
     return $l_int_hasil;
}

f_inijudul();
echo("\n");
$menu = readline("Masukkan Menu(+|-|/|*|%|stop): ");
if ($menu == "+") {
    $nilai1 = readline("nilai 1 = ");
    $nilai2 = readline("nilai 2 = ");
    $x = fg_int_tambah($nilai1, $nilai2) ;
    echo("Hasil tambah $nilai1 + $nilai2 adalah $x\n");
    $menu = readline("Masukkan Menu(+|-|/|*|%|stop): ");
} else if ($menu == "-") {
    $nilai1 = readline("nilai 1 = ");
    $nilai2 = readline("nilai 2 = ");
    $x = fg_int_kurang($nilai1, $nilai2) ;
    echo("Hasil kurang $nilai1 - $nilai2 adalah $x\n");
    $menu = readline("Masukkan Menu(+|-|/|*|%|stop): ");
} else if ($menu == "/") {
    $nilai1 = readline("nilai 1 = ");
    $nilai2 = readline("nilai 2 = ");
    $x = fg_int_bagi($nilai1, $nilai2) ;
    echo("Hasil bagi $nilai1 / $nilai2 adalah $x\n");
    $menu = readline("Masukkan Menu(+|-|/|*|%|stop): ");
} else if ($menu == "*") {
    $nilai1 = readline("nilai 1 = ");
    $nilai2 = readline("nilai 2 = ");
    $x = fg_int_kali($nilai1, $nilai2) ;
    echo("Hasil kali $nilai1 * $nilai2 adalah $x\n");
    $menu = readline("Masukkan Menu(+|-|/|*|%|stop): ");
} else if ($menu == "%") {
    $nilai1 = readline("nilai 1 = ");
    $nilai2 = readline("nilai 2 = ");
    $x = fg_int_sisabagi($nilai1, $nilai2) ;
    echo("Hasil sisabagi $nilai1 / $nilai2 adalah $x\n");
    $menu = readline("Masukkan Menu(+|-|/|*|%|stop): ");
} else {
    echo("Program Berhenti\nTerima kasih telah menggunakan program saya");
}
?>
