<div id="loader"></div>
  <header class="main-header">
	<div class="inside-header">
		<div class="navbar-custom-menu ">
			<ul class="nav navbar-nav " >
				<li class="" style="margin-right: 20px;">
					<a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light position-relative d-flex">
						<i class="fas fa-envelope"></i>
						<p class="position-absolute fs-6 bg-danger px-2 rounded" style="top: -5px; right: -4px;"><?= count($notified); ?></p>
					</a>
				</li>
			</ul>

			<!-- <li class="" style="margin-right: 20px ">
					<a href="" class="">
    					<i class="fas fa-envelope "></i>
					</a>
				</li> -->
		</div>
	</div>
	<div class="d-flex align-items-center logo-box justify-content-start">
		<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
			<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
		</a>	
		<!-- Logo -->
		<a href="<?php echo base_url(); ?>/dashboard/penjualan" class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <span class="light-logo">
                <h5>BarangKU</h5>
              </span>
			  <span class="dark-logo">
                <h5>BarangKU</h5>
              </span>
		  </div>
		</a>	
	</div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item d-md-none">
				<a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
			    </a>
			</li>
			
		</ul> 
	  </div>
		
      
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				<li class="header">Dashboard & Apps</li>
				<li class="treeview">
				  <a href="<?php echo base_url(); ?>/dashboard/penjualan">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">

					<li><a href="<?php echo base_url(); ?>/dashboard/penjualan"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Laporan Penjualan</a></li>
					
				  </ul>
				</li>
							
				<li class="treeview">
				  <a href="#">
					<i class="icon-File"><span class="path1"></span><span class="path2"></span></i>
					<span>Catat Penjualan</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">

					<li><a href="<?php echo base_url(); ?>/dashboard/penjualan/tambah"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tambah Data Penjualan</a></li>
					
				  </ul>
				</li>
				
				
				<li class="treeview">
				  <a href="#">
					<i class="icon-File"><span class="path1"></span><span class="path2"></span></i>
					<span>Barang</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">

					<li><a href="<?php echo base_url(); ?>/dashboard/barang"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Barang</a></li>
					<li><a href="<?php echo base_url(); ?>/dashboard/barang/tambah"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tambah Barang</a></li>
					
				  </ul>
				</li>

				<li class="treeview">
				  <a href="#">
					<i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
					<span>Settings</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">

					<li><a href="<?php echo base_url(); ?>/dashboard/penjualan/target"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Setting Target Bulanan</a></li>
					
				  </ul>
				</li>
				
			  </ul>
		  </div>
		</div>
    </section>
	<div class="sidebar-footer">
		<a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span class="icon-Settings-2"></span></a>
		<a href="mailbox.html" class="link" data-bs-toggle="tooltip" title="Email"><span class="icon-Mail"></span></a>
		<a href="<?php echo base_url(); ?>/auth/logout" class="link" data-bs-toggle="tooltip" title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
	</div>
  </aside>