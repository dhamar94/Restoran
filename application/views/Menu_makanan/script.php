    <script type="text/javascript">
    $(document).ready(function(){

        $(".alert").hide();

        $("#inpt-gmbr").change(readURL);
        $("#inpt-gmbr-u").change(readURL);

        function readURL() {
          var $input = $(this);
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $input.next('.tampil-gambar').attr('src', e.target.result).show();
                }
                reader.readAsDataURL(this.files[0]);
            }
        }


        $(".nama_referensi").on('blur',function(){
            var nama = $(this).val();
            $.ajax({
                type:"POST",
                url:"<?php echo site_url('Menu_makanan/cek') ?>",
                data:{nama:nama},
                success:function(data){
                    if (data == 1) {
                        $('#simpan').attr("type","button");
                        alert("menu sudah ada");
                        $('.nama_referensi').css("border","1px solid red");

                    }else{
                        $('#simpan').attr("type","");
                        $('.nama_referensi').css("border","1px solid #e4e7ea");

                    }
                }

            });

        });


        $("#form-tambah").on('submit',function(e){
            e.preventDefault();
            $.ajax({
                type:"POST",
                data: new FormData(this),
                url: "<?php echo site_url('Menu_makanan/tambah') ?>",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend:function(data){
                    $('.preloader').show();
                    $("#modal-tambah").modal('hide');
                },
                success:function(data){
                    $(".preloader").hide();
                    $("#form-tambah").trigger("reset");
                    $(".alert-success").show();
                    $(".ref").load(location.href+" .ref>*","");
                
                },error:function(data){
                    $(".preloader").hide();
                    $(".alert-danger").show();
                }

            });

            setTimeout(function(){
                $(".alert").slideUp();

            },2000);

            return false;

        });

        $(document).on('click','.hapus',function(e){
            e.preventDefault();
            var id = $(this).attr('data');
            var gambar = $(this).attr('gambar');
            var konfir = confirm("Apakah Yakin ?");
            if (konfir == true) {
                $.ajax({
                    type:"POST",
                    url: "<?php echo site_url('Menu_makanan/hapus') ?>",
                    data:{id:id,gambar:gambar},
                    beforeSend:function(data){
                        $('.preloader').show();
                        $("#modal-tambah").modal('hide');
                    },
                    success:function(data){
                        $(".preloader").hide();
                        $(".alert-success").show();
                        $(".ref").load(location.href+" .ref>*","");
                    
                    },error:function(data){
                        $(".preloader").hide();
                        $(".alert-danger").show();
                    }

                });
            }

            setTimeout(function(){
                $(".alert").slideUp();

            },4000);

            return false;

        });



        $(document).on('click','.edit',function(e){
            var id_ref = $(this).attr('data');
            var gambar = $(this).attr('gambar');
            $.ajax({
                method:"POST",
                url: "<?php echo site_url('Menu_makanan/get') ?>",
                data:{id_ref:id_ref},
                success:function(data){
                    var json = JSON.parse(data);
                    // console.log(data);
                    $("#modal-update").modal('show');
                    $("#id_referensi").val(json[0].id_referensi);
                    $("#gambar_lama").val(json[0].gambar);
                    $("#nama_referensi").val(json[0].nama_referensi);
                    $("#harga").val(json[0].harga);
                    $('#kategori option[value="'+json[0].kategori+'"]').attr('selected',true);
                    $('#status option[value="'+json[0].status_referensi+'"]').attr('selected',true);
                    $(".tampil-gambar").attr("src",'<?php echo base_url() ?>assets/image/'+json[0].gambar+'');

                }


            });
            return false;

        });



        $(document).on('submit','#form-update',function(){
            $.ajax({
                type:"POST",
                url:"<?php echo site_url('Menu_makanan/update') ?>",
                data: new FormData(this),
                cache:false,
                contentType:false,
                processData:false,
                beforeSend:function(data){
                    $('.preloader').show();
                    $("#modal-update").modal('hide');
                },
                success:function(data){
                    $(".preloader").hide();
                    $(".alert-success").show();
                    $(".ref").load(location.href+" .ref > *","");
                
                },error:function(data){
                    $(".preloader").hide();
                    $(".alert-danger").show();
                }

            });
            setTimeout(function(){
                $(".alert").slideUp();

            },4000);

            return false;

        });




        
    });
</script>