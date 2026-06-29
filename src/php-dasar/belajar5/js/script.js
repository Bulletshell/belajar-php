let keyword = document.getElementById("keyword");
let tombolCari = document.getElementById("tombolCari");
let container = document.getElementById("container");

//event ketika keyowrd ditulis
keyword.addEventListener('keyup', function(){

    // buat object ajax
    let xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        };
    };

    //eksekusi ajax
    xhr.open('GET', 'ajax/tb_kocheng.php?keyword=' + keyword.value, true);
    xhr.send();
});