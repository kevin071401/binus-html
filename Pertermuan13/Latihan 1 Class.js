class mahasiswa{
    constructor(nama , tinggal) {
        this.nama = nama;
        this.tinggal = tinggal;
    }

    printmahasiswa() {
        console.log("Data Mahasiswa", "\nNama:", this.nama, "\nTempat Tinngal:", this.tinggal);
    }
}

let nama = prompt("Nama Mahasiswa = ");
let tinggal = prompt("Tempat Tinggal = ");

let hasil = new mahasiswa(nama, tinggal);

hasil.printmahasiswa();
