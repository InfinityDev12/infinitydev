<?php 
include 'fungsi.php';
session_start();
$sapa = $_SESSION['username'];
if($sapa == "opinfinity"){
	

}else{
	header("location:FORBIDDEN");
}

$id = $_GET["id"];

if(hapusk($id)>0){
	echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'komen.php'

			</script>
		";
}
else{
	echo "
			<script>
				alert('data gagal dihapus');
				document.location.href = 'komen.php'

			</script>
		";
}
