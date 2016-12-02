<?php
	session_start();
?>

<?php
	if(isset($_SESSION['level'])){
		session_destroy();
	}
	echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
?>
