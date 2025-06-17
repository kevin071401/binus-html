let LogA = parseInt(prompt("Longitude Titik A= ")) ;
let LatA = parseInt(prompt("Latitude Titik A= ")) ;
let LogB = parseInt(prompt("Longitude Titik B= ")) ;
let LatB = parseInt(prompt("Latitude Titik B= ")) ;
const UE = 6371.009;


console.log(LogA);
console.log(LatA);
console.log(LogB);
console.log(LatB);
console.log(2 *  Math.asin(Math.sqrt(Math.sin(((LatB - LatA) / 2) **2) + Math.sin(((LatB - LatA) / 2) **2) * Math.cos(LatA) * Math.cos(LatB))) * UE);
