
	<!-- Vendor JS -->
	<script src="<?php echo base_url(); ?>/js/vendors.min.js"></script>
	<script src="<?php echo base_url(); ?>/js/pages/chat-popup.js"></script>
    <script src="<?php echo base_url(); ?>/assets/icons/feather-icons/feather.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>



	<script>
		

		const socket = io("http://localhost:3000", {
			transports: ["websocket"]
		});

		socket.on("connect_error", (err) => {
			Toastify({
				text: "😨 Tidak bisa melakukan koneksi ke websocket.",
			}).showToast();
		
		});
	</script>
	
		<?php if(isset($errors) && is_array($errors) && count($errors) > 0): ?>
			<script>
			Swal.fire({
				icon: "error",
				title: "Oops...",
				html: " <?php foreach($errors as $field => $message){ echo $message . "<br>"; } ?> ",
			});
			</script>
		
		<?php endif; ?>
		
		<?php
		if($this->session->error_login){
		?>

			<script>

				Swal.fire({
					icon: "error",
					title: "Oops...",
					html: "<?php echo $this->session->error_login; ?>",
				});
			</script>
			
	
			<?php }
			unset(
				$_SESSION['error_login']
			);
			?>

	

</body>
</html>
