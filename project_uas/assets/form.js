document.getElementById("namaform").onkeyup = function () {
    let bigger = document.getElementById("namaform");
    bigger.value = bigger.value.toUpperCase(); 
};

document.getElementById("loginpage").onload = function(){
    alert("selamat datang guys");
  };
document.getElementById("myBtn").disabled = true;

document.getElementById("confform").onchange = function () {
    let passform = document.getElementById("passform").value;
    let confform = document.getElementById("confform").value;
        if (passform !== confform) {
            document.getElementById("alertpass").style.display = "inline-block";
            document.getElementById("myBtn").disabled = true;
        } else {
            document.getElementById("alertpass").style.display = "none";
            document.getElementById("myBtn").disabled = false;
        }
}

document.getElementById("myBtn").onclick = function (){
    let now = new Date();
    var month = now.getMonth() + "1";
    let myr = month + now.getFullYear();

    let namaform = document.getElementById("namaform").value;
    let userform = document.getElementById("userform").value;
    let teleform = document.getElementById("teleform").value;
    let passform = document.getElementById("passform").value;
    let confform = document.getElementById("confform").value;
    if (namaform === "" || userform === "" || teleform === "" || passform === "" || confform === "")
    {
        alert("you need to fill all of the data first and fill again");
    } else {
        document.getElementById("show_data").style.display = "inline";
        document.getElementById("form_member").style.display = "none";

        let kode = myr + namaform.substring(0, 2);
        // tampilan
        document.getElementById("nama1").innerHTML += namaform;
        document.getElementById("user1").innerHTML += userform;
        document.getElementById("tele1").innerHTML += teleform;
        document.getElementById("kode1").innerHTML += kode;
    }
}