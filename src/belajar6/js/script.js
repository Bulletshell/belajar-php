$(document).ready(function(){
    //menghilangkan tombol car
    $('#tombolCari').hide();


    //timer agar keyword tidak langsung hit keserver
    let timer;

    //event ketika keyword ditulis
    $('#keyword').on('keyup', function(){
        //munculkan icon loading
        $('.loader').show();

        //mengulang waktu timer ketika masih mengetik
        clearTimeout(timer);

        timer = setTimeout(function(){
        //ajax menggunakan load
        // $('#container').load('ajax/tb_kocheng.php?keyword=' + $('#keyword').val()); 
        
        //$.get()
        $.get('ajax/tb_kocheng.php?keyword=' + $('#keyword').val(), function(data){
            $('#container').html(data);
            $('.loader').hide();
        })
        },500); //delay 300ms
        
    });
});