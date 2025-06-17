let suhu = parseInt(prompt("Suhu= ")) ;
console.log(suhu);
console.log();
console.log(`Ganti Suhu
1. Celcius ke Fahrenheit
2. Celcius ke Kelvin
3. Fahrenheit ke Celcius
4. Fahrenheit ke Kelvin
5. Kelvin ke Celcius
6. Kelvin ke Fahrenheit`);
let kon = parseInt(prompt("Pilihan Konversi = ")) ;
if (kon > 6){
    console.log("error");
} else if (kon = 1){
    console.log((9/5 * suhu) + 32 );
} else if (kon = 2){
    console.log(suhu + 273.15);
} else if (kon = 3){
    console.log(5/9 * (suhu - 32));
} else if (kon = 4){
    console.log((5/9 * (suhu - 32)) + 273.15 );
} else if (kon = 5){
    console.log(suhu - 273.15 );
} else {
    console.log((9/5 * (suhu - 273.15)) + 32 )
}

