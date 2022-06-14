let array = [{nama: "container refeer"},{nama: "container opentop"},{nama: "container dry"}];

let utk_li = document.getElementById("masyaallah");

array.forEach((item) => {
    utk_li.innerHTML += '<li class="list-group-item text-capitalize">' + '' + item.nama + '</li>';
});

const username = "rahmad";
const password = "12345";

function ceklogin() {
  //varibel untuk menampung data dari form login
  let userlogin = document.getElementById("username1").value;
  let passlogin = document.getElementById("password1").value;
  if (userlogin === "" || userlogin === null) {
    message("alert", "Username wajib diisi!!");
  } else if (passlogin === "" || passlogin === null) {
    message("alert", "Password wajib diisi!!");
  } else {
    if (userlogin === username && passlogin === password) {
        alert("Login Berhasil, Selamat Datang " + userlogin);
        window.location.href = "index.html"; 
    } else {
      message("alert", "Username dan Password tidak sesuai!!");
      document.getElementById("username").value = "";
      document.getElementById("password").value = "";
    }
  }
}

function message(id, text) {
  document.getElementById(id).innerHTML = "<b>" + text + "</b>";
  document.getElementById(id).style.display = "inline";
}
/////-------------------------batas-----------------------------------////
