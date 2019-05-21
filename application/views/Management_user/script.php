<script type="text/javascript">
 $(document).ready(function(){
   $('.alert').hide();

   
   tampil_user();

   	function tampil_user(){
		var save_method; 
        var table;
        table = $('#table').DataTable({ 
            "processing": true, 
            "serverSide": true, 
            "ajax": {
                "url": '<?php echo site_url('Management_user/tampil_user'); ?>',
                "type": "POST",
                
            },
            "columns": [
                {"data": "id_user",
                render:function(data,type,row,meta){
                	return meta.row + meta.settings._iDisplayStart +1; 
                }
            },
                {"data": "username"},
                {"data": "nama_user"},
                {"data": "nama_level"},
                {"data": "aksi"}
            ],


        });

	}


     

     $("#form-tambah").on('submit',function(){

     	$.ajax({
     		url: "<?php echo base_url('Management_user/tambah') ?>",
     		method: "POST",
     		data: new FormData(this),
		    contentType: false,
		    cache: false,
		    processData: false,
		    beforeSend:function(data){
                $('.preloader').hide();
                $("#modal-tambah").modal("hide");
		        
		    },success:function(data){
            
		    	$('.alert-success').show();
                $("#form-tambah").trigger("reset");
		    	$("#table").DataTable().ajax.reload();

		    },error:function(data){
		    	$('.preloader').hide();
		    	$('.alert-danger').show();

		    }

     	});

        setTimeout(function(){
            $('.alert').slideUp();

        },5000);
     	return false;

     });


     $("#table").on('click','.hapus',function(){
        var id = $(this).attr('data');
        var konfir =  confirm("Apakah anda yakin?");
        if (konfir == true) {
            $.ajax({
                method: "POST",
                url: "<?php echo site_url('Management_user/delete') ?>",
                data: {id:id},
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

        },5000);
        
        return false;

     });



     $("#table").on('click','.ubah',function(){
        var id =  $(this).attr("data");
        $("#modal-update").modal('show');
        $.ajax({
            method: "POST",
            url: "<?php echo site_url('Management_user/get') ?>",
            data: {id:id},
            success:function(data){
                var obj = JSON.parse(data);
                $('#id').val(id);
                $("#username").val(obj[0].username);
                $("#nama_user").val(obj[0].nama_user);
                $('#level option[value="'+obj[0].id_level+'"]').attr("selected",true);
            }

        });
        return false;

     });


     $("#form-update").on('submit',function(){
        $.ajax({
            method:"POST",
            url:"<?php echo site_url('Management_user/update') ?>",
            data:new FormData(this),
            processData:false,
            cache:false,
            contentType:false,
            beforeSend:function(data){
                $('.preloader').show();
                $("#modal-update").modal('hide');
            },success:function(data){
                $('.preloader').hide();
                $('.alert-success').show();
                $("#table").DataTable().ajax.reload();

            },error:function(data){
                $('.preloader').hide();
                $('.alert-danger').show();

            }



        });

        setTimeout(function(){
            $('.alert').slideUp();
        },4000);

        return false;

     });


     $("#table").on("click",".reset",function(){
        var id = $(this).attr("data");
        $.ajax({
            type:"POST",
            url:"<?php echo site_url('Management_user/reset') ?>",
            data:{id:id},
            beforeSend:function(data){
                $('.preloader').show();
                
            },success:function(data){
                $('.preloader').hide();
                $('.alert-reset').show();
                $(".alert-reset").text('Berhasil ! ..Password baru = '+data+' ');
                $("#table").DataTable().ajax.reload();

            },error:function(data){
                $('.preloader').hide();
                $('.alert-danger').show();

            }

        });
        setTimeout(function(){
            $('.alert').slideUp();
        },11000);


     });



});
    

    
</script>
