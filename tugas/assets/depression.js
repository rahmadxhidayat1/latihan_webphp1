//input


const nama =" rahmad hidayat putra";
var person = {
    uts       : 60,
    uas       : 100,
    note      : "*note",
    rata_rata1 : function() {
        return (this.uts + this.uas) / 2;
     }
};
let n_huruf = "NILAI";
huruf = n_huruf[0] + n_huruf.substring(1,5).toLowerCase();

//---------1--------//

var data =[20000,40000,65000,80000]

//---------2--------//

// mahasiswa =["rahmad"]
// var daftar =["belum","sudah"]
// var bayar =[0,1]
// var nama_mahasiswa =["rahmad","hidayat","putra"]
// var absen1 = daftar[1] + bayar[1]
// var absen2 = daftar[1] + bayar[0]
// var absen3 = daftar[0] + bayar[1]
var keterangan = {                                 //cuma ini yang saya gunakan untuk soal ke 3
    kata1       : "silahkan mengikuti ospek",      //cuma ini yang saya gunakan untuk soal ke 3
    kata2       : "silahkan bayar terlebih dahulu",//cuma ini yang saya gunakan untuk soal ke 3
    kata3       : "silahkan hubungi administrator",//cuma ini yang saya gunakan untuk soal ke 3
};                                                 //cuma ini yang saya gunakan untuk soal ke 3

//---------test gagal--------//

var daftar1;
daftar1 ="belum"
var bayar1;
bayar1 ="0"

//---------3--------//

//--------------------soal ke 1/output--------------------//


document.write("<center><p>BISMILLAHIRRAHMANIRAHIM</p></center>")
document.write("<hr>")
document.write("<center><h3>Soal tentang nilai seseorang</h3></center>")
document.write("Nama Siswa:" + nama.toUpperCase() + "<br>")
document.write(huruf + " UTS: " + person.uts + "<br>")
document.write(huruf + " UAS: " + person.uas + "<br>")
document.write(huruf + " rata-rata: " + person.rata_rata1() + "<br>")
if(person.rata_rata1() >= 75){
    document.write(person.note.toUpperCase() + ": " + "selamat anda lulus");
}else if (person.rata_rata1 > 50){
    document.write(person.note.toUpperCase() + ": " + "maaf anda remidi");
}else {
    document.write(person.note.toUpperCase() + ": " + "wah gurune bati gak isok ngajari murid e/tidak lulus");
}
document.write("<hr>")


//--------------------soal ke 2/output--------------------//


document.write("<center><h3>Soal tentang data</h3></center>")
for (let a = 0;a <4;a++){
    document.write("databarangke-" + (a+1) + " ,harga=" + data[a] + "<br>")
    if(a >1 )
        document.write("diskon 5%" + " " + data[a]*0.05 + "<br>") 
}


//--------------------soal ke 3(cara ke 1)/output--------------------//


document.write("<hr>");
if(daftar1 =="sudah" && bayar1 == 1){
    document.write(keterangan.kata1)
}else if (daftar1 =="sudah" && bayar1 == 0){
    document.write(keterangan.kata2)
}else {
    document.write(keterangan.kata3)
}


//--------------------soal ke 3(cara ke 2)/output--------------------//


/*document.write("<hr>");
for (let b = 0;b <=1;b++){
    document.write(keterangan.kata2 + daftar[0] + "<br>")
    if (daftar == [1] && bayar == [1]){
        document.write(keterangan.kata1 + daftar[0] + "<br>")
    }
}*/