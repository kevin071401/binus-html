choice = "y"

while(true) {
    let A = parseInt(prompt("Side A = ")) ;
    let B = parseInt(prompt("Side B = ")) ;
    let C = parseInt(prompt("Side C = ")) ;
    if (choice == "y") {
        console.log( A );
        console.log( B );
        console.log( C );
        if ((A <= 0) || (B <= 0) || (C <= 0)) {
            console.log("Bukan Segitiga") ;
        } else if ((A == B) && (B == C)) {
            console.log("Segitiga Sama Sisi") ;
        } else if (((A != C) && (A == B)) || ((B != C) && (B == A)) || ((A != B) && (B == C)) || ((A != B) && (C == B))) {
            console.log("Segitiga Sama Kaki") ;
        } else if ((A + B == C) || (A + C == B) || (B + C == A)) {
            console.log("Segitiga Siku-Siku") ;
        } else {
            console.log("Segitiga Sembarang") ;
        }
    } else {
        console.log("Program Berhenti\nTerima kasih telah menggunakan program saya");
        break;
    }
    choice = prompt("Ingin mengulanginya lagi? ");
}
