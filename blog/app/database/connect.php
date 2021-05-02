<?php
	$conn = mysqli_connect('localhost','root', 'mahdi@123', 'blog');
	if($conn -> connect_error){
		die("Database not connected". $conn->connect_error);
	}
 ?>