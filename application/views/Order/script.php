
<script type="text/javascript">

$(document).ready(function() {

     

    tampil_order();
    tampil_histori();
     $(".alert").hide();
     
     setInterval(refresh,5000);

     function refresh(){
        $("#table").DataTable().ajax.reload();
     }

    
    $( ".pesanan" ).autocomplete({
      source: "<?php echo site_url('Order/get_autocomplate') ?>"
    });

    $( ".pesanan_u" ).autocomplete({
      source: "<?php echo site_url('Order/get_autocomplate') ?>"
    });

    function tampil_order(){
        var save_method; 
        var table;
        table = $('#table').DataTable({ 
            // "processing": true, 
            "serverSide": true, 
            "ajax": {
                "url": '<?php echo site_url('Order/tampil_order'); ?>',
                "type": "POST",
                
            },
            "aoColumns": [
                {"mData": "id_order",
                render:function(data,type,row,meta){
                    return meta.row + meta.settings._iDisplayStart +1; 

                }
            },
                {"mData": "no_meja",
                render:function(data,type,row,meta){
                    return "Meja "+data+""; 

                }
            },
                {"mData": "tanggal"},
                {"mData": "nama_user"},
                {"mData": "keterangan"},
                { "mData": function (data, type, dataToSet) {
                    if (data.status_order=="sedang di proses") {
                    return "<button data="+data.id_order+" data2="+data.status_order+" class='btn btn-primary ubh_sts'><i class='fa  fa-refresh'></i> "+data.status_order+"</button>"; 
                    }
                    if (data.status_order=="belum di proses") {
                    return "<button  data="+data.id_order+" data2="+data.status_order+" class='btn btn-danger ubh_sts'><i class='fa fa-warning'></i> "+data.status_order+"</button>"; 
                    }
                    if (data.status_order=="sudah di proses") {
                    return "<button  data="+data.id_order+" data2="+data.status_order+" class='btn btn-success ubh_sts'><i class='fa fa-check'></i> "+data.status_order+"</button>"; 
                    }
                }},
                


                {"data": "aksi"}
            ],


        });

    }

    function tampil_histori(){
        var save_method; 
        var table;
        table = $('#tbl-histori').DataTable({ 
            // "processing": true, 
            "serverSide": true, 
            "ajax": {
                "url": '<?php echo site_url('Order/tampil_histori'); ?>',
                "type": "POST",
                
            },
            "aoColumns": [
                {"mData": "id_order",
                render:function(data,type,row,meta){
                    return meta.row + meta.settings._iDisplayStart +1; 

                }
            },
                {"mData": "no_meja",
                render:function(data,type,row,meta){
                    return "Meja "+data+""; 

                }
            },
                {"mData": "tanggal"},
                {"mData": "nama_user"},
                {"mData": "keterangan"},
                {"mData": "status_order"},
            ],


        });

    }


    $("#table").on("click",".ubh_sts",function(){
        var id = $(this).attr("data");
        var status = $(this).attr("data2");
        var result = ""+status+" di proses";
        $("#modal-status").modal("show");
        $("#id_status").val(id);
        $('#ubh option[value="'+result+'"]').attr("selected",true); 
        return false;

    });

    $("#form-ubah-status").on("submit",function(){
        var id = $("#id_status").val();
        var status = $("#ubh").val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Order/ubah_status') ?>",
            data:{id:id,status:status},
            beforeSend:function(data){
                $("#modal-status").modal("hide");
            },
            success:function(data){
                $(".alert-success").show();
                $("#table").DataTable().ajax.reload();
            }

        });

        setTimeout(function(){
           $(".alert").slideUp();
      },1500);            
        return false;

    });



  

    $("#t_menu").on("click",function(){
        var menu = $(".pesanan").val();
        var no = $("#no").val();
        if (no =='') {
            alert("Masukan Jumlah pesanan");
            return false;

        }
        $.ajax({
            type:"POST",
            url: "<?php echo site_url('Order/cek') ?>",
            data:{menu:menu},
            success:function(data){
                if ( data == 0) {
                    alert("Menu tidak di temukan")
                }else{
                    // console.log()
                    var html = '<tr>'
                    +'<td>1</td>'   
                    +'<td>'+menu+'<input type="hidden" value="'+data+'" name="order_menu[]" class="form-control psn id_psn"></td>'
                    +'<td><input type="number" value="'+no+'" name="jml[]" class="form-control psn"></td>'
                    +'<td class="list"><a href="#" class="hps" style="cursor:pointer; color:#666;"><i class="fa fa-minus-square "></i></a></td>'
                    +'</tr>';
                    $(".ol").append(html); 


                }
                no++;
            },error:function(data){
                alert("Menu tidak di temukan");
            }

        });


        
        $(".ia").css('cursor','pointer');

        $(".pesanan").val("");
        $("#no").val("");

        
        return false;

    });


    $(".table_pesanan").on('click','.hps',function(){
        $(this).closest('tr').remove();

    });
   
 


    $("#form-tambah").on('submit',function(){
    


       $.ajax({
            type: "POST",
            url: "<?php echo site_url('Order/tambah') ?>",
            data: new FormData(this), 
            processData: false,
            cache: false,
            contentType: false,
            beforeSend:function(data){
                $('.preloader').show();
                $("#modal-tambah").modal('hide');
            },success:function(data){
                $('.preloader').hide();
                $("#form-tambah").trigger("reset");
                $('.alert-success').show();
                $("#table").DataTable().ajax.reload();

            },error:function(data){
                $('.preloader').hide();
                $('.alert-danger').show();

            }

       });

       

       setTimeout(function(){
           $(".alert").slideUp();
      },3000);

       return false;

    });



    $('#table').on('click','.ubah',function(){
        var id = $(this).attr("data");

        $("#modal-update").modal("show");
        $(".result").remove();

        $.ajax({
            type:"POST",
            url:"<?php echo site_url('Order/get_detail_order') ?>",
            data:{id:id},
            success:function(data){
                var obj = JSON.parse(data);
                console.log(obj);
                for (var i = 0; i < obj.length; i++) {
                    
                    var html = '<tr class="result">'
                    +'<td>1</td>'   
                    +'<td>'+obj[i].nama_referensi+'<input type="hidden" value="'+obj[i].id_referensi+'" name="order_menu[]" class="form-control psn id_psn"></td>'
                    +'<td><input type="number" value="'+obj[i].jumlah+'" name="jml[]" class="form-control psn"></td>'
                    +'<td class="list"><a href="#" class="hps" style="cursor:pointer; color:#666;"><i class="fa fa-minus-square "></i></a></td>'
                    +'</tr>';
                    $(".ols").append(html); 
                    
                }
            }
            });

        $.ajax({
            type:"POST",
            url:"<?php echo site_url('Order/get_order') ?>",
            data:{id:id},
            success:function(data){
                var obj = JSON.parse(data);
                $("#id").val(obj[0].id_order);
                $("#no_meja").val(obj[0].no_meja);
                $("#keterangan").val(obj[0].keterangan);
                $("#status_u").val(obj[0].status_order);
            }
        });

        
        
        

    });



    $("#table").on("click",".hapus",function(){
        var id = $(this).attr("data");
        var konfir = confirm("Apakah yakin ?");
        if (konfir == true) {
        $.ajax({
            type:"POST",
            url: "<?php echo site_url("Order/hapus") ?>",
            data:{id:id},
            beforeSend:function(data){
                $('.preloader').show();
            },success:function(data){
                $('.preloader').hide();
                $('.alert-success').show();
                $("#table").DataTable().ajax.reload();

            },error:function(data){
                $('.preloader').hide();
                $('.alert-danger').show();

            }

        });
     }
     setTimeout(function(){
        $(".alert").slideUp();

     },3000);
     return false;

    });


    $("#form-update").on("submit",function(){
        $.ajax({
            type:"POST",
            url:"<?php echo site_url('Order/update') ?>",
            data: new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            beforeSend:function(data){
                $('.preloader').show();
                $("#modal-update").modal('hide');
            },success:function(data){
                $('.preloader').hide();
                $('.alert-success').show();
                $("#table").DataTable().ajax.reload();
                $(".u").remove();

            },error:function(data){
                $('.preloader').hide();
                $('.alert-danger').show();

            }

        });
        return false;

    });


    $(".no_meja_t").on("blur",function(){
        var id = $(this).val();
        // alert(id);
        $.ajax({
            type:"POST",
            url:"<?php echo site_url('Order/cek_no_meja') ?>",
            data:{id:id},
            success:function(data){
               
            }

        });

    });






       $("#t_menu_u").on("click",function(){
        var menu = $(".pesanan_u").val();
        var no = $("#no_u").val();
        if (no =='') {
            alert("Masukan Jumlah pesanan");
            return false;

        }
        $.ajax({
            type:"POST",
            url: "<?php echo site_url('Order/cek') ?>",
            data:{menu:menu},
            success:function(data){
                if ( data == 0) {
                    alert("Menu tidak di temukan")
                }else{
                    $(".u").remove();
                    var html = '<tr class="u">'
                    +'<td>1</td>'   
                    +'<td>'+menu+'<input type="hidden" value="'+data+'" name="order_menu[]" class="form-control psn id_psn"></td>'
                    +'<td><input type="number" value="'+no+'" name="jml[]" class="form-control psn"></td>'
                    +'<td class="list"><a href="#" class="hps" style="cursor:pointer; color:#666;"><i class="fa fa-minus-square "></i></a></td>'
                    +'</tr>';
                    $(".ols").append(html); 


                }
                no++;
            },error:function(data){
                alert("Menu tidak di temukan");
            }

        });

        
        
        $(".ia").css('cursor','pointer');

        $(".pesanan_u").val("");
        $("#no_u").val("");

        
        return false;

    });




    $('#table').on('click','.detail',function(){
        var id = $(this).attr("data");
   
        $("#modal-detail").modal("show");
        $(".result").remove();

        $.ajax({
            type:"POST",
            url:"<?php echo site_url('Order/get_detail_order') ?>",
            data:{id:id},
            success:function(data){
                var obj = JSON.parse(data);
                console.log(obj);
                for (var i = 0; i < obj.length; i++) {
                    
                    var html = '<tr class="result">'
                    +'<td>1</td>'   
                    +'<td>'+obj[i].nama_referensi+'<input type="hidden" value="'+obj[i].id_referensi+'" name="order_menu[]" class="form-control psn id_psn"></td>'
                    +'<td><input type="number" value="'+obj[i].jumlah+'" name="jml[]" class="form-control psn"></td>'
                    +'</tr>';
                    $(".ols").append(html); 
                    
                }
            }
            });

        $.ajax({
            type:"POST",
            url:"<?php echo site_url('Order/get_order') ?>",
            data:{id:id},
            success:function(data){
                var obj = JSON.parse(data);
                $(".no_meja").val(obj[0].no_meja);
                $(".keterangan").val(obj[0].keterangan);
                $(".status_u").val(obj[0].status_order);
            }
        });
        
    
    });





        
});
</script>