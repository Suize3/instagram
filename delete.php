<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "lesson25");
	$text_delete = "DELETE FROM event WHERE id = '{$_GET['id']}'";
	mysqli_query($connect, $text_delete);
	header('Location: index.php');
?>
