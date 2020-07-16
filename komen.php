<?php
include 'fungsi.php';
session_start();
$sapa = $_SESSION['username'];
if ($sapa == "opinfinity") {
} else {
	header("location:FORBIDDEN");
}
$table = query('SELECT * FROM komen');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>komen</title>
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
			<li><a href="jklmn.php">Data User</a></li>
			<li><a href="komen.php" class="active">Data Komentar</a></li>
			<li><a href="index.php">Komentar</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		<label id="icon">
			<i class="fa fa-bars"></i>
		</label>
	</nav>
	<br><br>
	<table border="1px solid black" style="border-collapse: collapse; width:70%; margin-left:200px;">
		<thead>

			<th style="padding:8px 10px">No</th>
			<th>Time</th>
			<th>Nama</th>
			<th>Komen</th>
			<th>Action</th>


		</thead>

		<?php $i = 1; ?>
		<?php foreach ($table as $tb) : ?>
			<tbody>

				<tr style="text-align:center;">
					<td style="padding:5px 10px; "><?= $i; ?></td>
					<td><?= $tb["time"]; ?></td>
					<td><?= $tb["nama"]; ?></td>
					<td><?= $tb["komen"]; ?></td>
					<td><a href="hapusk.php?id=<?= $tb["id"] ?>">hapus</a></td>

				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>

			</tbody>
	</table>
</body>

</html>