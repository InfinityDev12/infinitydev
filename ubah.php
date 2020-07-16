<?php
include 'fungsi.php';
session_start();
$sapa = $_SESSION['username'];
if ($sapa == "opinfinity") {
} else {
	header("location:FORBIDDEN");
}
$id = $_GET["id"];
$tb = query("SELECT * FROM users WHERE id = $id")[0];

if (isset($_POST["ubah"])) {

	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'jklmn.php'

			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah');
				document.location.href = 'jklmn.php'
				

			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>tambah data</title>
	<link rel="stylesheet" href="../assets/css/ubah.css">
	<link rel="stylesheet" href="../assets/fontawesome/css/all.css">
	<link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
</head>

<body>

	<div class="container">


		<form action="" method="post">

			<input type="hidden" name="id" value="<?= $tb["id"]; ?>">
			<input type="hidden" name="password" value="<?= $tb["password"]; ?>">
			<div class="box">
				<center>
					<h1>Ubah Data</h1>
				</center><br><br>

				<div class="input">
					<label for="namadepan"><i class="fa fa-user-circle"></i> Nama Depan</label> <br><br>
					<input type="text" name="nd" placeholder="nama depan" value="<?= $tb["namadepan"];  ?>" required>
				</div><br>

				<div class="input">
					<label for="namabelakang"> <i class="fa fa-user-circle"></i> Nama Belakang</label> <br><br>
					<input type="text" name="nb" placeholder="nama belakang" value="<?= $tb["namabelakang"]; ?>" required>
				</div><br>

				<div class="input">
					<label for="username"><i class="fa fa-user"></i> Username</label> <br><br>
					<input type="text" name="username" placeholder="username" value="<?= $tb["username"];  ?>" required>
				</div><br>

				<div class="input">
					<label for="email"><i class="fa fa-envelope"></i> Email</label> <br><br>
					<input type="text" name="email" placeholder="email" value="<?= $tb["email"];  ?>" required>
				</div><br><br><br>

				<div class="btn">
					<center><button type="submit" name="ubah">Ubah data</button></center>
				</div>
			</div>

		</form>

	</div>




</body>

</html>