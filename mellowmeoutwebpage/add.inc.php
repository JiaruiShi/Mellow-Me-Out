<?php

if (isset($_POST['submit'])) {
	include 'code.php';
	//ASSING header and body
	$header = mysqli_real_escape_string($conn, $_POST['header']);
	$body = mysqli_real_escape_string($conn, $_POST['body']);
	$sql = "INSERT INTO datas (user_header, user_body) VALUES ('$header', '$body');";
	mysqli_query($conn, $sql);
	header("Location: products.php?signup=success");
			exit();
			
}