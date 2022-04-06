<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Sarah Yaw COSC540 Fall 2020-->
			<title>540 3.9</title>
		<meta charset="UTF-8">
		<style>
			body{font-family:sans-serif;}
			form,h1,h3{text-align:center;}
			p{font-size:30px; background-color:#052639; color:white; padding:10px; width:400px; height:400px margin:auto;}
			img{border: solid 10px #052639; width:400px; margin-left: auto; margin-right: auto }
			div{background-color:#CBE0E6; width:30%; margin:auto; padding:35px;}
		</style>
	</head>
	<body>
		<?php
			$screen= rand(1,8);
			echo "<div><h1>Webpage</h1><h3>Hello, Welcome to this page!</h3><br><hr><br>";
			if($screen%2==0)
			{
				if($screen==2)
					echo "<img src='stars.jpg'>";
				else if($screen==4)
					echo "<img  src='starTrek.jpg'>";
				else if($screen==6)
					echo "<img src='plants.jpg'>";
				else if($screen==8) 
					echo "<img src='venividi.JPG'>";
			}
			else
			{
				if($screen==1)
					echo '<p>We understand so much. But the sky behind those lights - mostly void, partially stars -  that sky reminds us we dont understand even more.<br> - Welcome To Nightvale</p>';
				else if($screen==3)
					echo '<p>Be proud of your place in the cosmos. It is small, and yet, it is.<br> - Welcome to Night Vale</p>';
				else if($screen==5)
					echo '<p>The universe is vast. You are also vast. So is an ant. There are different sizes of infinity.<br> - Welcome to Night Vale</p>';
				else if($screen==7) 
					echo '<p>Love is infinite like sun rays.<br> - Davis Michael Bennett</p>';
			}
			date_default_timezone_set("America/Detroit");
			echo"</div><div style='background-color:#052639; color:white; '>".date("l jS \of F Y h:i A")."</div>";
		?>				
	</body>
</html>
