function check(){
    var nama = document.getElementById("nama").value;
    var mail = document.getElementById("mail").value;
    var kode = document.getElementById("kode").value;
    

    if(nama == "" || mail == "" || kode == ""){
        alert("ada yang kosog!!!");
    }
    else{
        alert("anda berhasil memesan :)");
    }
}

const a = new Date();
				document.getElementById("demo").innerHTML = a;

function show() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
