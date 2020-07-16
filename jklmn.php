<?php

include 'fungsi.php';
session_start();
$sapa = $_SESSION['username'];
if ($sapa == "opinfinity") {
} else {
	header("location:FORBIDDEN");
}


$table = query('SELECT * FROM users');

if (isset($_POST["tambah"])) {
	header("location:tambah.php");
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin</title>
	<link rel="stylesheet" href="../assets/css/admin.css">
	<link rel="stylesheet" href="../assets/fontawesome/css/all.css">
	<link rel="stylesheet" href="../assetts/fontawesome/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#icon').click(function() {
				$('ul').toggleClass('show');
			});
		});
	</script>
</head>

<body>
	<nav>
		<label class="brand"><img src="../img/dev.png" alt="" srcset="" width="200" height="auto"></label>
		<ul>
			<li><a href="jklmn.php" class="active">Data User</a></li>
			<li><a href="komen.php">Data Komentar</a></li>
			<li><a href="index.php">Komentar</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		<label id="icon">
			<i class="fa fa-bars"></i>
		</label>
	</nav><br><br>
	<form action="" method="post">

		<button type="submit" name="tambah" style="margin-left: 70px;">Tambah Data</button>

	</form>
	<br>
	<table border="1px solid black" style="border-collapse: collapse; width:90%; margin-left:70px">
		<thead style="padding:5px 10px">


			<th style="padding:8px 10px">no</th>
			<th>nama depan</th>
			<th>nama belakang</th>
			<th>username</th>
			<th>email</th>
			<th>password</th>
			<th>action</th>


		</thead>
		<?php $i = 1; ?>
		<?php foreach ($table as $tb) : ?>
			<tbody>

				<tr style="text-align:center;">
					<td style="padding:5px 10px; "><?= $i; ?></td>
					<td><?= $tb["namadepan"]; ?></td>
					<td><?= $tb["namabelakang"]; ?></td>
					<td><?= $tb["username"]; ?></td>
					<td><?= $tb["email"]; ?></td>
					<td><?= $tb["password"]; ?></td>
					<td><a href="ubah.php?id=<?= $tb["id"] ?>">ubah</a>|
						<a href="hapus.php?id=<?= $tb["id"] ?>">hapus</a>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>

			</tbody>
	</table>
</body>

</html>