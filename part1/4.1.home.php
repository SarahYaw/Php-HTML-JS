<?php
	setcookie("name",$name, time()+30*24*60*60);
	setcookie("add",$address, time()+30*24*60*60);
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<!--Sarah Yaw COSC540 Fall 2020-->
			<title>540 4.1</title>
		<meta charset="UTF-8">
		<style>
			body{font-family:sans-serif;}
			form,p{text-align:center;}
			table{margin:auto; text-align:left; border:dotted 1px gray; padding:10px;}
			td{vertical-align:top;}
		</style>
	</head>
	<body>
		<h1 style='text-align:center'>Food Site</h1>
			<p style='font-size:12px; text-align:right'><a href='4.1.store.html'>Employee?</a></p><br>
		<hr>
		<br>
		<form action="4.1.customer.php" method="post">
			<table>
    			<tr><td>Food</td>	<td><input type="checkbox" name="pizza">Pizza<span style="color:white">............</span>$7.00<br>
    									<input type="checkbox" name="bread">Breadsticks<span style="color:white">..</span>$3.00<br>
    									<input type="checkbox" name="soda">Soda<span style="color:white">............</span>$1.00</td></tr>
    			<?php
    				if(!isset($_COOKIE["name"]))
    					echo "<tr><td>Name: </td><td><input name='name'>";
    				else
    				{
    					$name = $_COOKIE["name"];
    					echo "<tr><td>Name: </td><td><input name='name' value='$name'>";
    				}
    			?>
    			<tr><td>Card Number: </td><td><input name="card" size="16"><br>
    			<?php
    				if(!isset($_COOKIE["add"]))
    					echo "<tr><td>Address: </td><td><input name='address'>";
    				else
    				{
    					$address = $_COOKIE["add"];
    					echo "<tr><td>Address: </td><td><input name='address' value='$address'>";
    				}
    			?>
    			<tr><td></td><td><input type="submit"></td></tr>
    		</table>
		</form>
	</body>
</html>
