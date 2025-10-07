<div class="wrapper">  

  <?php
  
  include './application/views/templates/dashboard/sidebar.php';
  
  ?>
    

	

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<h3 class="fw-bold">📊 Data Penjualan </h3>
			
			
			<div class="d-flex gap-4" style="margin-top: 20px;">

				<div class="card" style="width: 17rem;">
					<div class="card-body">
						<i class="fa-solid text-info fs-1 fa-calendar-days"></i>
						<h1 class="fw-bold fs-6">Total Transaksi Hari Ini</h1>
						<h1 class="fs-5"><?php
						
							$count = 0;
							foreach($datapenjualan as $data){
								if($data->tanggal == date('d') && $data->bulan == date('m') && $data->tahun == date('Y'))
									$count++;
							}
							
							echo $count;
						
						?> Transaksi</h1>
					</div>
				</div>
				
				<div class="card" style="width: 17rem;">
					<div class="card-body">
						<i class="fa-solid text-danger fs-1 fa-calendar"></i>
						<h1 class="fw-bold fs-6">Total Transaksi Bulan <?php echo date('F'); ?></h1>
						<h1 class="fs-5"><?php
						
							$count = 0;
							foreach($datapenjualan as $data){
								if($data->bulan == date('m') && $data->tahun == date('Y'))
									$count++;
							}
							
							echo $count;
						
						?> Transaksi</h1>
					</div>
				</div>
				
				<div class="card" style="width: 17rem;">
					<div class="card-body">
						<i class="fa-solid text-success fs-1 fa-calendar"></i>
						<h1 class="fw-bold fs-6">Total Transaksi Tahun <?php echo date('Y'); ?></h1>
						<h1 class="fs-5"><?php
						
							$count = 0;
							foreach($datapenjualan as $data){
								if($data->tahun == date('Y'))
									$count++;
							}
							
							echo $count;
						
						?> Transaksi</h1>
					</div>
				</div>
			
			</div>
			<canvas id="myChart"></canvas>
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th class="text-start">No</th>
                        <th class="text-start">Nama Barang</th>
                        <th class="text-start">Jumlah</th>
                        <th class="text-start">Harga Satuan</th>
                        <th class="text-start">Total Harga</th>
                        <th class="text-start">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
						$no = 0;
						foreach($datapenjualan as $data){ 
						$no++;
					?>
                    <tr>
                        <td class="text-start"><?= $no; ?></td>
                        <td class="text-start"><?= $data->nama_barang; ?> (id:<?= $data->id; ?>)</td>
                        <td class="text-start"><?= $data->jumlah; ?></td>
                        <td class="text-start">Rp. <?= number_format($data->harga_satuan, 0, ",", "."); ?></td>
                        <td class="text-start">Rp. <?= number_format($data->jumlah * $data->harga_satuan, 0, ",", "."); ?></td>
                        <td class="text-start"><?= $data->tanggal . " " . getMonthName($data->tahun . "-" . $data->bulan . "-" . $data->tanggal) . " " . $data->tahun; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    &copy; 2021 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="d-flex justify-content-center">
			<p class="fw-bold">Notification</p>
		  </div>
          <div class="media-list media-list-hover mt-20" id="notification_container">
			<?php
				if(!empty($notified)){
					foreach($notified as $data){
						echo "
							<div class='media py-10 px-0'>
								<a class='avatar avatar-lg' href='#'>
									<i class='fa-solid fa-boxes'></i>
								</a>
								<div class='media-body'>
									<p class='fs-16'>
									$data->message
									</p>
								</div>
							</div>
						";
					}
				}
			
			?>

			
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
	<!-- Sidebar -->


<script>
    const ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
        type: 'bar', // Or 'line', 'scatter', etc.
        data: {
            labels: [
                <?php foreach($hari as $date){ ?>
                    <?php echo $date->tanggal . ","; ?>
                <?php } ?>
            ],
            datasets: [{
                label: 'Actual Sales',
                data: [
                    <?php 
                        $totals = [];

                        foreach ($totalinDay as $row) {
                            
                            $tanggal = $row->tanggal;
                            $harga   = (int)$row->total_harga;

                            if (!isset($totals[$tanggal])) {
                                $totals[$tanggal] = 0;
                            }

                            $totals[$tanggal] += $harga;
                        }

                        echo implode(',', array_values($totals));
                    ?>
                    
                
                    

                ],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                annotation: {
                    annotations: [{
                        type: 'line',
                        mode: 'horizontal', // For a horizontal target line
                        scaleID: 'y', // The ID of the y-axis to attach the line to
                        value: <?= $target_bulanan->target_bulanan ?>, // The y-axis value where the line should be drawn
                        borderColor: 'red',
                        borderWidth: 2,
                        label: {
                            enabled: true,
                            content: 'Target',
                            position: 'start' // Position of the label
                        }
                    }]
                }
            },
            scales: {
                y: { // Ensure your y-axis has an ID if you're specifying scaleID
                    beginAtZero: true
                }
            }
        }
    });

    	
    new DataTable('#myTable');
</script>