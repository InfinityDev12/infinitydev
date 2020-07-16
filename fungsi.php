<?php 
include 'connection.php';

//tampil
	function query($query){
		global $mysqli;
		$result = mysqli_query($mysqli, $query);
		$row = "";
		while($row = mysqli_fetch_assoc($result)){
			$rows [] = $row; 
		}
		return $rows;
	}
//tambah
	function tambah($query){
		global $mysqli;
		$nd = htmlspecialchars($_POST["nd"]);
 		$nb = htmlspecialchars($_POST["nb"]);
		$username = htmlspecialchars($_POST["username"]);
		$email = htmlspecialchars($_POST["email"]);
 		$password = htmlspecialchars($_POST["password"]);

 		$query = "INSERT INTO users VALUES
 				('', '$nd','$nb','$username', '$email', md5('$password'))";

 	mysqli_query($mysqli,$query);
 	return mysqli_affected_rows($mysqli);
	}
//ubah
	function ubah($data){
 	global $mysqli;

 	$id = $data["id"];
 	$nd = htmlspecialchars($_POST["nd"]);
 	$nb = htmlspecialchars($_POST["nb"]);
	$username = htmlspecialchars($_POST["username"]);
	$email = htmlspecialchars($_POST["email"]);
 	$password = htmlspecialchars($_POST["password"]);

 	$query = "UPDATE users SET
 				namadepan = '$nd',
 				namabelakang = '$nb',
 				username = '$username',
 				email = '$email',
 				password = '$password'
 			  WHERE id = $id
 				";


 	mysqli_query($mysqli,$query);
 	return mysqli_affected_rows($mysqli);
 	
	}
//hapus

 function hapus($id){
 	global $mysqli;

 	mysqli_query($mysqli,"DELETE FROM users WHERE id = $id");
 	return mysqli_affected_rows($mysqli);
 }
 //hapus komen

 function hapusk($id){
 	global $mysqli;

 	mysqli_query($mysqli,"DELETE FROM komen WHERE id = $id");
 	return mysqli_affected_rows($mysqli);
 }
 ?>