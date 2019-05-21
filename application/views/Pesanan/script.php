<script type="text/javascript">
	$(document).ready(function() {

		console.log($(window).width());

		if ($(window).width() < 966) {
			$(".jumlah").hide();

		}else{
			$(".jumlah").show();

		}



		$(document).on('click','.delete',function(){
			setInterval(notif,10000);
			$(".alert").hide();

			function notif(){
				$(".notif_cart").load(location.href+" .notif_cart>*","");

			}
			$(document).on('click','.delete',function(){
				var id = $(this).attr("id");
				var konfir = confirm("Apakah yakin");
				if (konfir == true) {
					$.ajax({
						type:"POST",
						url:"<?php echo site_url('Pesanan/remove') ?>",
						data:{id:id},
						beforeSend:function(data){
							$('.loader-backdrop').show();
						},
						success:function(data){
							$('.loader-backdrop').hide();
							$(".cart").load(location.href+" .cart>*","");
							$(".s").load(location.href+" .s>*","");



						}

					});
				}

			});
			return false;
		});



		$(document).on('click','.plus',function(){
			var id = $(this).attr("data");
			var par = "plus";
			var input = parseInt($("."+id+"").val()) + 1;
			$("."+id+"").val(input);
			$.ajax({
				type:"POST",
				url:"<?php echo site_url('Pesanan/update_qty') ?>",
				data: {id:id,input:input},
				success:function(data){

				}
			})

		});

		$(document).on('click','.minus',function(){
			var id = $(this).attr("data");
			var input = parseInt($("."+id+"").val()) - 1;
			var par = "min";
			$("."+id+"").val(input);
			$.ajax({
				type:"POST",
				url:"<?php echo site_url('Pesanan/update_qty') ?>",
				data: {id:id,input:input},
				success:function(data){
					
				}
			})

		});


		$(document).on('click','.konfir',function(){
			$("#modal").modal('show');

		});

		$("#tambah").on('submit',function(){
			
			$.ajax({
				type:"POST",
				url:"<?php echo site_url('Pesanan/add_order') ?>",
				data: new FormData(this),
				processData: false,
                cache: false,
                contentType: false,
				beforeSend:function(data){
					$(".loader-backdrop").show();
					$("#modal").modal('hide');

				},
				success:function(data){
					$(".loader-backdrop").hide();
					$(".cart").load(location.href+" .cart>*","");
					$(".alert").show();
					$(".s").load(location.href+" .s>*","");


				}

			});

			return false;

			setTimeout(function(){
				$(".alert").slideUp();

			},3000);



		});


		$(".tmbh").on('click',function(){
			var id = "";
			$.ajax({
				type:"POST",
				url:"<?php echo site_url('Pesanan/add_again') ?>",
				data:{id:id},
				beforeSend:function(data){
					$(".loader-backdrop").show();
				
				},
				success:function(data){
					$(".loader-backdrop").hide();
					$(".alert").show();
					$(".cart").load(location.href+" .cart>*","");
					$(".tmbh").hide();
					$(".konfir").hide();


				}

			});

		});





	})
</script>