<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Sarah Yaw COSC540 Fall 2020-->
			<title>540 4.1</title>
		<meta charset="UTF-8">
		<style>
			body{font-family:sans-serif;}
			form,p{text-align:center;}
			table,tr,td{margin:auto; padding:5px; border-collapse:collapse; border:dotted 1px #658585;}
		</style>
	</head>
	<body>
		<h1 style="text-align:center">Food Site</h1>
		<br> 
		<hr>
		<br>
		<?php
			$db = mysqli_connect("127.0.0.1", "root", "plastic25", "Prog14"); 
			if (mysqli_connect_errno()) echo "not connected! ".$db->error;
			$que = "SELECT * FROM password";
			$res = mysqli_query($db, $que);
			$out = mysqli_num_rows($res);
			$flag=false;
			while($row = mysqli_fetch_array($res))
			{
				if($row["pswd"]==$_POST["password"])
				{	
					$query = "SELECT * FROM orders";
					$result = mysqli_query($db, $query);
					$output = mysqli_num_rows($result);
					echo "<table>";
					while($rows = mysqli_fetch_array($result))
					{
						$food="";
						$total=0;
						if($rows["pizza"]==1){ $food=$food."Pizza "; $total+=7;}
						if($rows["breadsticks"]==1){ $food = $food."Breadsticks "; $total+=3;}
						if($rows["soda"]==1){ $food = $food."Soda "; $total+=1;}
						echo "<tr><td>".$rows["id"]."<br>".$food."<br>".number_format($total,2)."<br>".$rows["name"]."<br>".$rows["card"]."<br>".$rows["address"]."</td></tr>";
					}
					echo"</table>";
					echo "<form action='4.1.update.php' method='post'><p>Enter compleated order ID here:<br><input name='id'> <input type='submit' value='Update'></p></form>";
					$flag=true;
					break;
				}
			}		
			if(!$flag)
				echo "<h3 style='text-align:center'>Incorrect Password</h3>";
		?>
	</body>
</html>