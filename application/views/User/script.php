<script type="text/javascript">
	$(document).ready(function(){

		setInterval(notif,7000);

		function notif(){
			$(".notif_cart").load(location.href+" .notif_cart>*","");

		}

		$(document).on('click','.cart',function(){
			var id_referensi = $(this).attr("id_referensi");
			var nama_referensi = $(this).attr("nama_referensi");
			var harga = $(this).attr("harga_referensi");
			var gambar = $(this).attr("gambar");
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('Menu/cart') ?>",
				data:{id_referensi:id_referensi,nama_referensi:nama_referensi,harga:harga,gambar:gambar},
				success:function(data){
		     	  $(".notif_cart").load(location.href+" .notif_cart>*","");
			      $(".al").append(' <div class="  alert alert-dismissible fade show alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert"aria-label="Close"><span aria-hidden="true">×</span></button>Berhasil tambah cart !</div>').hide().show('slow');
  

				}

			});
			setTimeout(function(){
				$('.alert').slideUp();

			},3000);
			return false;


		});

	});
</script>