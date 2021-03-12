<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<h3 style="text-align:center;  padding-bottom:30px;">Jadwal Sholat</h3>

				<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">

					<table cellpadding="10" class="table">
						<tr>
							<th>#</th>
							<th>Tanggal</th>
							<th>Subuh</th>
							<th>Dzuhur</th>
							<th>Ashar</th>
							<th>Magrib</th>
							<th>Isya</th>

						</tr>

						<?php
						if(!empty($l)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
							foreach($l as $data){
								echo "<tr>
								<td>".$data->id."</td>
								<td>".$data->tgl."</td>
								<td>".$data->sbh."</td>
								<td>".$data->dzh."</td>
								<td>".$data->ash."</td>
								<td>".$data->mgr."</td>
								<td>".$data->isy."</td>

								</tr>";
							}
						}else{ // Jika data siswa kosong
							echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
						}
						?>
					</div>
				</div>
			</div>
