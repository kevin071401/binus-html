let angka = parseInt(prompt("Contoh Angka= ")) ;
choice = "y"

while(true) {
    if (choice == "y") {
        console.log(angka);
        if (angka % 2 == 0){
            console.log("angka " + angka + " adalah bilangan genap");
        }else {
            console.log("angka " + angka + " adalah bilangan ganjil");
        }
    } else {
        console.log("Program Berhenti\nTerima kasih telah menggunakan program saya");
        break;
    } 
    choice = prompt("Ingin mengulanginya lagi? ");
}
