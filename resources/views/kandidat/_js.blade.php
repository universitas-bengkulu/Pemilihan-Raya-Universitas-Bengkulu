<script>
    $(document).on('submit','.form',function (event){
        event.preventDefault();
        $(".btnSubmit"). attr("disabled", true);
        $('.btnSubmit').html('<i class="fa fa-check-circle"></i>&nbsp; Menyimpan');  // Mengembalikan teks tombol

        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            typeData: "JSON",
            data: new FormData(this),
            processData:false,
            contentType:false,
            success : function(res) {
                $(".btnSubmit"). attr("disabled", true);
                toastr.success(res.text, 'Success: Submit data berhasil');
                setTimeout(function () {
                    window.location.href=res.url;
                } , 500);
            },
            error:function(xhr){
                toastr.error(xhr.responseJSON.text, 'Oops, An Error Occurred');
                setTimeout(function() {
                    $(".btnSubmit").prop('disabled', false);  // Mengaktifkan tombol kembali
                    $(".btnSubmit").html('<i class="fa fa-check-circle"></i>&nbsp; Simpan');  // Mengembalikan teks tombol
                }, 1000); // Waktu dalam milidetik (2000 ms = 2 detik)
            }
        })
    });
</script>
