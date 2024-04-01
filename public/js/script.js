$(function(){

    $('.tampilModalTambah').on('click',()=>{
      $('#formModalLabel').html('Tambah Data Novel')
      $('.modal-footer button[type=submit]').html('Tambah Novel')
    });
    
    $('.tampilModalUbah').on('click',() =>{
        $('#formModalLabel').html('Ubah Data Novel')
        $('.modal-footer button[type=submit]').html('Ubah Novel')
        $('.modal-body form').attr('action', 'http://localhost/remed-mvc/public/book/ubah');
    
        const id = $(this).data('id');

        $.ajax({
            url:'http://localhost/remed-mvc/public/book/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#judul').val(data.judul);
                $('#penulis').val(data.penulis);
                $('#selesai').val(data.selesai);
                $('#rilis').val(data.rilis);
            }
        });
    
    });
    });