	<script src="<?php echo base_url(); ?>js/vendors.min.js"></script>
	<script src="<?php echo base_url(); ?>js/pages/chat-popup.js"></script>
    <script src="<?php echo base_url(); ?>assets/icons/feather-icons/feather.min.js"></script>

	<script src="<?php echo base_url(); ?>/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendor_components/fullcalendar/fullcalendar.js"></script>
	
	<!-- EduAdmin App -->
	<script src="<?php echo base_url(); ?>/js/template.js"></script>
	<script src="<?php echo base_url(); ?>/js/pages/dashboard.js"></script>
	<script src="<?php echo base_url(); ?>/js/pages/calendar.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        <?php if(isset($errors) && is_array($errors) && count($errors) > 0): ?>
		Swal.fire({
			icon: "error",
			title: "Oops...",
			html: " <?php foreach($errors as $field => $message){ echo $message . "<br>"; } ?> ",
		});
		<?php endif; ?>
    </script>
</body>
</html>