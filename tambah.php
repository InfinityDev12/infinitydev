<?php
include 'fungsi.php';
session_start();
$sapa = $_SESSION['username'];
if ($sapa == "opinfinity") {
} else {
	header("location:FORBIDDEN");
}
if (isset($_POST['tambah'])) {

	if (tambah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'jklmn.php';

			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'jklmn.php';

			</script>
		";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>tambah</title>
	<link rel="stylesheet" href="../assets/css/tambah.css">
	<link rel="stylesheet" href="../assets/fontawesome/css/all.css">
	<link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
</head>

<body>

	<form action="" method="post">
		<div class="box content">
			<center>
				<h1>Tambah data</h1>
			</center><br><br>
			<div class="input">
				<label for="namadepan"><i class="fa fa-user-circle"></i> Nama Depan</label> <br><br>
				<input type="text" name="nd" placeholder="nama depan" required>
			</div><br>
			<div class="input">
				<label for="namabelakang"> <i class="fa fa-user-circle"></i> Nama Belakang</label> <br><br>
				<input type="text" name="nb" placeholder="nama belakang" required>
			</div><br>
			<div class="input">
				<label for="username"><i class="fa fa-user"></i> Username</label> <br><br>
				<input type="text" name="username" placeholder="username" required>
			</div><br>
			<div class="input">
				<label for="email"><i class="fa fa-envelope"></i> Email</label> <br><br>
				<input type="text" name="email" placeholder="email" required>
			</div><br>
			<div class="input">
				<label for="password"><i class="fa fa-lock"></i> Password</label> <br><br>
				<input type="password" name="password" placeholder="password" required>
			</div><br><br><br><br>

			<div>
				<center><button type="submit" name="tambah">Tambah Data</button></center>
			</div>
		</div>


	</form>

</body>

</html>