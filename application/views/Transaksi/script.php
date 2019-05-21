<script type="text/javascript">
	$(document).ready(function(){
		$(".alert").hide();
		tampil();
		$(".t_bayar").hide();

		$("#t_menu").on("click",function(){
			$(".list").remove();
			$(".total_bayar").val("");
			var meja = $("#no_meja").val();

			$.ajax({
				type : "POST",
				url: "<?php echo site_url('Transaksi/orderan') ?>",
				data: {meja:meja},
				success:function(data){
					if (data == 1) {
						alert("Tidak di temukan");
					}else{
						var obj = JSON.parse(data);
						var no =1 ;
						$("#id_order").val(obj[0].id_order);
						var jumlah = 0;
						for (var i = 0; i < obj.length; i++) {
							
							var html = '<tr class="list">'
	                        +'<td>'+no+'</td>'   
	                        +'<td>'+obj[i].nama_referensi+'</td>'
	                        +'<td>'+obj[i].jumlah+'</td>'
	                        +'<td>'+ obj[i].harga * obj[i].jumlah+'</td>'
	                        +'</tr>';
	                        $(".ol").append(html); 
	                         no++;

	                         var jumlah = jumlah+ (obj[i].harga * obj[i].jumlah);
						}

						 $(".t_bayar").show();
						 $(".total").val(jumlah);

					}

				}

			});
			return false;
		});


		$("#i_bayar").on("keyup",function(){
			var bayar = $(this).val();
			var total = $(".total").val();
			if (total == "") {
				alert("Masukan no meja");
			}else{
				var hasil = bayar - total;
			    $("#kembalian").val(hasil);
			}

		});


		$("#form-tambah").on("submit",function(){
			var dibayarkan = parseInt($("#i_bayar").val());
			var total = parseInt($(".total").val());

			if (dibayarkan >= total) {
				$.ajax({
					type:"POST",
					url:"<?php echo site_url('Transaksi/tambah') ?>",
					data: new FormData(this),
					processData: false,
	                cache: false,
	                contentType: false,
	                beforeSend:function(data){
	                    $('.preloader').show();
	                    
	                    $("#modal-tambah").modal('hide');
	                },success:function(data){

	                    $('.preloader').hide();
	                    $(".alert-success").show();
	                    // $('.alert-success').show();
	                    $("#table").DataTable().ajax.reload();

	                },error:function(data){
	                	$(".alert-success").show();
	                    $('.preloader').hide();
	                    // $('.alert-danger').show();

	                }

				});
				$(".di_bayarkan").css("border","1px solid #e4e7ea");

			}else{
				
				alert("uang kurang");
				$(".di_bayarkan").css("border","1px solid red");
				
				return false;
			}
			
			setTimeout(function(){
	           $(".alert").slideUp();
	      },3000);

		 
		 return false;	

		});


		function tampil(){
          $('#table').DataTable({
               serverSide: true,
               processing: true,
               ajax: {
                    url: "<?php echo site_url('Transaksi/tampil_transaksi') ?>",
                    type : "POST",
               },
               columns:[
                 {"data": "id_transaksi",   
                 "render": function ( data, type, full, meta ) {
                        return  meta.row + meta.settings._iDisplayStart +1;
                    } 
             },
                 {"data": "no_meja",
                 "render": function ( data, type, full, meta ) {
                    return  "Meja "+data+"";
                  } 
             },
                 {"data": "nama_user"},
                 {"data": "tanggal"},
                 {"data": "total_bayar"},
                 {"data": "detail"},
                

               ]


          });

     }


     $("#table").on('click','.hapus',function(){
     	var id_transaksi = $(this).attr("data");
     	var id_order = $(this).attr("data2");
     	var konfir = confirm("apakah yakin");
     	if (konfir  == true) {
     		$.ajax({
	     		url: "<?php echo site_url('Transaksi/hapus') ?>",
	     		type: "POST",
	     		data:{id_transaksi:id_transaksi,id_order:id_order},
	     		beforeSend:function(data){
                    $('.preloader').show();
                    
                    $("#modal-tambah").modal('hide');
                },success:function(data){
                    $('.preloader').hide();
                    $(".alert-success").show();
                    // $('.alert-success').show();
                    $("#table").DataTable().ajax.reload();

                },error:function(data){
                	$(".alert-success").show();
                    $('.preloader').hide();
                    // $('.alert-danger').show();

                }

			});
			
     	}
     	setTimeout(function(){
	           $(".alert").slideUp();
	      },3000);

     });


	})
</script>