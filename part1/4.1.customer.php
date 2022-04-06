<?php
	$name = $_POST["name"];
	$address = $_POST["address"];
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
			table,tr,td,th{margin:auto; padding:5px; border-collapse:collapse; border:dotted 1px #658585;}
		</style>
	</head>
	<body>
		<?php
			$db = mysqli_connect("127.0.0.1", "root", "plastic25", "Prog14"); 
			if (mysqli_connect_errno()) 
				echo "not connected! ".$db->error;
			echo "<h1 style='text-align:center'>Food Site</h1><br><hr>";
			
			if($_POST["pizza"]=="on")
				$pizza = "1";
			else
				$pizza = "0";
			
			if($_POST["bread"]=="on")	
				$bread = "1";
			else
				$bread = "0";
				
			if($_POST["soda"]=="on")	
				$soda = "1";
			else
				$soda = "0";
				
			$card = $_POST["card"];
			//$name = $_POST["name"];
			//$address = $_POST["address"];
			
			$query = "INSERT INTO orders (name, card, address, breadsticks, pizza, soda) VALUES ('".$name."', '".$card."', '".$address."', '".$bread."', '".$pizza."', '".$soda."');";
			$result = mysqli_query($db, $query);
			$total=0;
			echo "<h3 style='text-align:center'>Your Order</h3> <table>";
			if($result)
			{
				if($_POST["pizza"]=="on")
				{
					echo "<tr><td>Pizza</td><td>$7.00</td></tr>";
					$total=total+7;
				}
			
				if($_POST["bread"]=="on")	
				{
					echo "<tr><td>Breadsticks</td><td>$3.00</td></tr>";
					$total=$total+3;
				}
				
				if($_POST["soda"]=="on")	
				{
					echo "<tr><td>Soda</td><td>$1.00</td></tr>";
					$total=$total+1;
				}
				echo "<tr><th>Total</th><th>$".number_format($total,2)."</th></tr>";
				echo "<tr><td>Name</td><td>".$name."</td></tr><tr><td>Card</td><td>".$card."</td></tr><tr><td>Address</td><td>".$address."</td></tr></table>";
			}
			else echo "<h3 style='text-align:center>Something went wrong, Please try again.</h3>";
			
			echo "<a href='4.1.home.php'><p>Return to Menu</p></a>";		
		?>
	</body>
</html>