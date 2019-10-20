<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>
		<center><h1>DATA PAHLAWAN</h1></center>
		<a href="<?= site_url('Pahlawan/tambah_data') ?>" class="btn btn-info">TAMBAH DATA</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>NAMA</th>
					<th>Asal</th>
					<th>EDIT</th>
					<th>DELETE</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomer=1; foreach($dat as $row){ ?>
					<tr>
						<td><?= $nomer++ ?></td>
						<td><?= $row->nama ?></td>
						<td><?= $row->asal ?></td>
						<td><a href="<?= site_url('Pahlawan/edit_data/'.$row->no) ?>" class="btn btn-warning">EDIT</a>						</td>
						
						<td>
							<button onclick="return confirm('Serius?');" class="btn btn-danger">
								<a href="<?= site_url('Pahlawan/delete_data/'.$row->no) ?>" >DELETE</a>
								</button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>
