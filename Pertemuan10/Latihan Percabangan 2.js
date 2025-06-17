let umur = parseInt(prompt("umur= ")) ;
if (umur < 0) {
    console.log("ERROR");
} else if (( umur >= 0 ) && ( umur <= 1 )) {
    console.log("Bayi");
} else if ( ( umur > 1 ) && ( umur < 4 ) ) {
    console.log("Batita");
} else if ( ( umur >= 4 ) && ( umur < 6 ) ) {
    console.log("Balita");
} else if ( ( umur >= 6 ) && ( umur < 13 ) ) {
    console.log("Anak-Anak");
} else if ( ( umur >= 13 ) && ( umur < 18 ) ) {
    console.log("Remaja");
} else if ( ( umur >= 18 ) && ( umur < 22 ) ) {
    console.log("abg");
} else if ( ( umur >= 22 ) && ( umur < 31 ) ) {
    console.log("Pra Dewasa");
} else if ( ( umur >= 31 ) && ( umur < 51 ) ) {
    console.log("Dewasa");
} else if ( ( umur >= 51 ) && ( umur <= 70 ) ) {
    console.log("Pra Lansia");
} else {
    console.log("Lansia");
}
