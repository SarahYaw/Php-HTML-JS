<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Sarah Yaw COSC540 Fall 2020-->
			<title>540 4.1</title>
		<meta charset="UTF-8">
		<style>
			body{font-family:sans-serif;}
			form,p{text-align:center;}
			table,tr,td,th{margin:auto; padding:5px; border-collapse:collapse; border:dotted 1px #658585;}
		</style>
	</head>
	<body>
		<?php
			$id = $_POST["id"];
			$db = mysqli_connect("127.0.0.1", "root", "plastic25", "Prog14"); 
			if (mysqli_connect_errno()) echo "not connected! ".$db->error;
			$query="DELETE FROM orders WHERE id=".$id;
			$result  = mysqli_query($db, $query);
			if(result)echo "<br><br><h3 style='text-align:center'>Thank you, <a href='4.1.store.html'>return to orders page.</a></h3>";	
		?>
	</body>
</html>