<html>

<head>
	<title>Form Ubah</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>"> </head>

<body>
	<?php $this->load->view('n/hd.php') ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<h3>Form Ubah Jadwal Sholat</h3>
					<hr>
					<!-- Menampilkan Error jika validasi tidak valid -->
					<div style="color: red;">
						<?php echo validation_errors(); ?>
					</div>
					<?php echo form_open("j/ubah/".$j->id); ?>
						<table class="table" cellpadding="10">
							<tr>
								<td>ID Jadwal</td>
								<td>
									<label>
										<?php echo set_value('inid', $j->id); ?>
									</label>
								</td>
							</tr>
							<tr>
								<td>Tanggal</td>
								<td>
									<input type="date" name="intgl" value="<?php echo set_value('intgl', $j->tgl); ?>">
								</td>
							</tr>
							<tr>
								<td>Subuh</td>
								<td>
									<input type="time" name="insbh" value="<?php echo set_value('insbh', $j->sbh); ?>">
								</td>
							</tr>
							<tr>
								<td>Dzuhur</td>
								<td>
									<input type="time" name="indzh" value="<?php echo set_value('indzh', $j->dzh); ?>">
								</td>
							</tr>
							<tr>
								<td>Ashar</td>
								<td>
									<input type="time" name="inash" value="<?php echo set_value('inash', $j->ash); ?>">
								</td>
							</tr>
							<tr>
								<td>Magrib</td>
								<td>
									<input type="time" name="inmgr" value="<?php echo set_value('inmgr', $j->mgr); ?>">
								</td>
							</tr>
							<tr>
								<td>Isya</td>
								<td>
									<input type="time" name="inisy" value="<?php echo set_value('inisy', $j->isy); ?>">
								</td>
							</tr>
						</table>
						<hr>
						<input type="submit" name="submit" value="Ubah">
						<a href="<?php echo base_url('j/index'); ?>">
							<input type="button" value="Batal">
						</a>
						<?php echo form_close(); ?>
				</div>
			</div>
		</div>
</body>

</html>