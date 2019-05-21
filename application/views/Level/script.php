<script type="text/javascript">
$(document).ready(function(){
     
     $(".alert").hide();

     tampil();

     function tampil(){
          $('#table').DataTable({
               serverSide: true,
               processing: true,
               ajax: {
                    url: "<?php echo site_url('Level/tampil') ?>",
                    type : "POST",
               },
               columns:[
                 {"data": "id_level",   
                 "render": function ( data, type, full, meta ) {
                        return  meta.row + meta.settings._iDisplayStart +1;
                    } 
                 },
                 {"data": "nama_level"},
                 {"data": "aksi"},

               ]


          });

     }
        



     

     $("#form-tambah").on('submit',function(){

     	$.ajax({
     		url:"<?php echo site_url('Level/tambah') ?>",
     		method: "POST",
     		data: new FormData(this),
     		processData: false,
     		cache: false,
     		contentType:false,
     		beforeSend:function(data){
     			$('.preloader').show();
     			$("#modal-tambah").modal('hide');
     		},
     		success:function(data){
     			$(".preloader").hide();
     			$(".alert-success").show();
                    $("#table").DataTable().ajax.reload();
                    $("#form-tambah").trigger("reset");

     		},error:function(data){
     			$(".preloader").hide();
     			$(".alert-danger").show();
     		}

     	});
     
     	setTimeout(function(){
     		$(".alert").slideUp();
     	},3000);
     	
        return false;
     	

     });



     $("#table").on('click','.hapus',function(){
          var id = $(this).attr("data");
          var konfir = confirm("Apakah Yakin ?");
          if (konfir == true) {
               $.ajax({
                    method:"POST",
                    url: "<?php echo site_url('Level/hapus') ?>",
                    data: {id:id},
                    beforeSend:function(data){
                         $('.preloader').show();
                    },
                    success:function(data){
                         $(".preloader").hide();
                         $(".alert-success").show();
                         $("#table").DataTable().ajax.reload();

                    },error:function(data){
                         $(".preloader").hide();
                         $(".alert-danger").show();
                    }


               });
          }


          setTimeout(function(){
               $(".alert").slideUp();
          },3000);

          return false;
     });


     $("#table").on('click','.ubah',function(){
          var id = $(this).attr("data");
          $("#modal_update").modal("show");
          $.ajax({
               method:"POST",
               url: "<?php echo site_url('Level/get') ?>",
               data: {id:id},
               success:function(data){
                    var obj = JSON.parse(data);
                    $("#kode").val(obj[0].id_level);
                    $("#kode").attr("readonly",true);
                    $("#nama_level").val(obj[0].nama_level);
               }

          });

     });


     $("#form-update").on('submit',function(){
          $.ajax({
               method:"POST",
               url:"<?php echo site_url('Level/update') ?>",
               data: new FormData(this),
               processData: false,
               cache: false,
               contentType: false,
               beforeSend: function(data){
                    $(".preloader").show();
                    $("#modal_update").modal('hide');
               },
               success:function(data){
                    $(".preloader").hide();
                    $(".alert-success").show();
                    $("#table").DataTable().ajax.reload();
               },
               error:function(data){
                    $(".preloader").hide();
                    $(".alert-danger").show();
               }

          });

          setTimeout(function(){
               $(".alert").slideUp();

          },2000);
          return false;

     });

   


});

    
</script>