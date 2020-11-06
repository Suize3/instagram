<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "lesson25");
	mysqli_query($connect, "UPDATE event SET text= '{$_GET["text"]}', img= '{$_GET["img"]}' WHERE id={$_GET["id"]}");
	header("Location: index.php");
?>
