
	<!-- Vendor JS -->
	<script src="<?php echo base_url(); ?>/js/vendors.min.js"></script>
	<script src="<?php echo base_url(); ?>/js/pages/chat-popup.js"></script>
    <script src="<?php echo base_url(); ?>/assets/icons/feather-icons/feather.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		<?php if(isset($errors) && is_array($errors) && count($errors) > 0): ?>
		Swal.fire({
			icon: "error",
			title: "Oops...",
			html: " <?php foreach($errors as $field => $message){ echo $message . "<br>"; } ?> ",
		});
		<?php endif; ?>
		<?php
		if($this->session->error_login){
		?>
			Swal.fire({
				icon: "error",
				title: "Oops...",
				html: "<?php echo $this->session->error_login; ?>",
			});


		<?php }
			unset(
				$_SESSION['error_login']
			);
		?>
	</script>	
	

</body>
</html>
