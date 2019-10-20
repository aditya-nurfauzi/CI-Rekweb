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
		<right><a href="<?= site_url('Pahlawan/tampil') ?>" class="btn btn-info"><< KEMBALI</a></right>
		<center><h1>EDIT DATA PAHLAWAN</h1></center>
		<table class="table table-bordered">
			<form action="<?= site_url('Pahlawan/edit_data_action') ?>" method="post">
				<thead>
					<tr>
						<th><input type="text" name="no" required hidden value="<?= $dat[0]->no ?>" ></th>
					</tr>
					<tr>
						<th>Nama</th>
						<th>:</th>
						<th><input type="text" name="nama" required value="<?= $dat[0]->nama ?>" ></th>
					</tr>
					<tr>
						<th>Asal</th>
						<th>:</th>
						<th><input type="text" name="asal" required value="<?= $dat[0]->asal ?>"></th>
					</tr>
					<tr>
						<th colspan="3"><center><input type="submit" value="EDIT DATA" /></center></th>
					</tr>
				</thead>
			</form>
		</table>
	</body>
</html>
