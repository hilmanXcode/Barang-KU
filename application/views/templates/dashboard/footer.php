	<script src="<?php echo base_url(); ?>js/vendors.min.js"></script>
	<script src="<?php echo base_url(); ?>js/pages/chat-popup.js"></script>
    <script src="<?php echo base_url(); ?>assets/icons/feather-icons/feather.min.js"></script>

	<script src="<?php echo base_url(); ?>/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendor_components/fullcalendar/fullcalendar.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js"></script>

	
	
	<!-- EduAdmin App -->
	<script src="<?php echo base_url(); ?>/js/template.js"></script>
	<script src="<?php echo base_url(); ?>/js/pages/dashboard.js"></script>
	<script src="<?php echo base_url(); ?>/js/pages/calendar.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
	if(isset($this->session->success_message)){
		?>
    	<script>
			Swal.fire({
				icon: "success",
				title: "Yeay!",
				html: "<?php echo $this->session->success_message; ?>",
			});
		</script>

	<?php unset($_SESSION['success_message']); ?>
	<?php } ?>

	<?php if(isset($this->session->error_message)){ ?>
		<script>
			Swal.fire({
				icon: "error",
				title: "Opps!",
				html: "<?php echo $this->session->error_message; ?>",
			});
		</script>
	
	<?php unset($_SESSION['error_message']); ?>
	<?php } ?>

</body>
</html>