<script type="text/javascript">
	$(document).ready(function(){
		$(".alert").hide();

		$("#form").on("submit",function(){

			$("#konfir").modal("show");

			return false;

		});


		$("#cek").on("click",function(){
			var pass_lama = $("#pass_lama").val();
			var username = $("#username").val();
			var nama = $("#nama").val();
			var id = $("#id").val();
			var password = $("#password").val();
			$.ajax({
				type: "POST",
				url:"<?php echo site_url('Profile/cek_password') ?>",
				data:{pass_lama:pass_lama,username:username},
				success:function(data){
					if (data == 1) {

						$.ajax({
							type:"POST",
							data: {username:username,pass_lama:pass_lama,nama:nama,password:password,id:id},
							url:"<?php echo site_url('Profile/ubah') ?>",
							success:function(data){
								$("#konfir").modal("hide");
								$(".alert-success").show();
							}


						});



					}else{
						$(".alert-salah").show();
					}

				}

			});

			setTimeout(function(){
				$(".alert").slideUp();
			},2000)

		});

	});
</script>