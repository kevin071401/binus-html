
function inijudul(){
    console.log(` Kevin Julius Siahaan
    Surabaya`);
}
function fg_int_tambah(nilai1 = 0, nilai2 = 0){
    let l_int_hasil = nilai1 + nilai2;
     return l_int_hasil;
}
function fg_int_kurang(nilai1 = 0, nilai2 = 0){
    let l_int_hasil = nilai1 - nilai2;
     return l_int_hasil;
}
function fg_int_bagi(nilai1 = 0, nilai2 = 0){
    let l_int_hasil = nilai1 / nilai2;
     return l_int_hasil;
}
function fg_int_kali(nilai1 = 0, nilai2 = 0){
    let l_int_hasil = nilai1 * nilai2;
     return l_int_hasil;
}
function fg_int_sisabagi(nilai1 = 0, nilai2 = 0){
    let l_int_hasil = nilai1 % nilai2;
     return l_int_hasil;
}

inijudul()
console.log()
let menu = prompt("Masukkan Menu(+|-|/|*|%|stop): ");
if (menu == "+") {
    let nilai1 = parseInt(prompt("nilai 1= "));
    let nilai2 = parseInt(prompt("nilai 2= "));
    x = fg_int_tambah(nilai1, nilai2)
    console.log("Hasil tambah", nilai1, "+", nilai2, "adalah", x);
    let menu = prompt("Masukkan Menu(+|-|/|*|%|stop): ");
} else if (menu == "-") {
    let nilai1 = parseInt(prompt("nilai 1= "));
    let nilai2 = parseInt(prompt("nilai 2= "));
    x = fg_int_kurang(nilai1, nilai2)
    console.log("Hasil kurang", nilai1, "-", nilai2, "adalah", x);
    let menu = prompt("Masukkan Menu(+|-|/|*|%|stop): ");
} else if (menu == "/") {
    let nilai1 = parseInt(prompt("nilai 1= "));
    let nilai2 = parseInt(prompt("nilai 2= "));
    x = fg_int_bagi(nilai1, nilai2)
    console.log("Hasil bagi", nilai1, "/", nilai2, "adalah", fg_int_bagi(nilai1, nilai2));
    let menu = prompt("Masukkan Menu(+|-|/|*|%|stop): ");
} else if (menu == "*") {
    let nilai1 = parseInt(prompt("nilai 1= "));
    let nilai2 = parseInt(prompt("nilai 2= "));
    x = fg_int_kali(nilai1, nilai2)
    console.log("Hasil kali", nilai1, "*", nilai2, "adalah", x);
    let menu = prompt("Masukkan Menu(+|-|/|*|%|stop): ");
} else if (menu == "%") {
    let nilai1 = parseInt(prompt("nilai 1= "));
    let nilai2 = parseInt(prompt("nilai 2= "));
    x = fg_int_sisabagi(nilai1, nilai2)
    console.log("Hasil sisabagi", nilai1, "%", nilai2, "adalah", x);
    let menu = prompt("Masukkan Menu(+|-|/|*|%|stop): ");
} else {
    console.log("Program Berhenti\nTerima kasih telah menggunakan program saya");
}
