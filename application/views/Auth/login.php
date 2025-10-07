
<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Manajemen Barang</h2>
								<p class="mb-0">Login untuk mulai</p>							
							</div>
							<div class="p-40">
								<?php echo form_open('auth/login'); ?>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" class="form-control ps-15 bg-transparent" placeholder="Username" name="username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password" name="password">
										</div>
									</div>
									
									<div class="d-grid">

										<button type="submit" class="btn btn-danger text-white mt-10">Login</button>
									</div>

								</form>	
							</div>						
						</div>
						
					</div>
				</div>
			</div>
		</div>
</div>