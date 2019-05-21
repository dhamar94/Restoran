<script type="text/javascript">
	$(document).ready(function(){

		setInterval(real_time,4000);
		function real_time(){
			$(".iii").load(location.href+" .iii>*","");
			$(".ooo").load(location.href+" .ooo>*","");
			$(".aa").load(location.href+" .aa>*","");
		}

		$(document).on('click','.delete-order',function(){

			

			var id = $(this).attr("id_detail");
			$.ajax({
				type:"POST",
				data:{id:id},
				url:"<?php echo site_url('Hasil/delete_detail') ?>",
				success:function(data){
					$(".ref").load(location.href+" .ref>*","");

				}

			});

		});

		

		$(document).on('click','.dgr',function(){
			var id = $(this).attr('data');
			var user = "user";
			var konfir = confirm("apakah yakin");
			if (konfir == true) {
				$.ajax({
					type:"POST",
					url:"<?php echo site_url('Hasil/hapus') ?>",
					data:{id:id,user:user},
					success:function(data){
						$(".ref").load(location.href+" .ref>*","");
						$(".re").load(location.href+" .re>*","");
						$(".dgr").hide();
					}

				});
			}

		});

	});
</script>
