<script type="text/javascript">
	$(document).ready(function(){

		$("#pdf").on("click",function(){
			$("#form").attr("action","<?php echo site_url('Laporan/pdf') ?>");
			$("#form").attr("target","_blank");

		});

		$("#pdf_owner").on("click",function(){
			$("#form_owner").attr("action","<?php echo site_url('Laporan/pdf_owner') ?>");
			$("#form_owner").attr("target","_blank");

		});

		$("#excel").on("click",function(){
			$("#form").attr("action","<?php echo site_url('Laporan/excel') ?>");
			// $("#form").attr("target","_blank");

		});

		$("#print").on("click",function(){
			$("#form").attr("action","<?php echo site_url('Laporan/print') ?>");
			$("#form").attr("target","_blank");

		});

		$("#print_owner").on("click",function(){
			$("#form_owner").attr("action","<?php echo site_url('Laporan/print_owner') ?>");
			$("#form_owner").attr("target","_blank");

		});



	});
</script>