<!DOCTYPE>
<html>

<head>
	<title> My homework 1 </title>
	<style type="text/css">
		.red
		{
		color : red;
		}
		.blue
		{
		color : blue;
		}
    </style>	
</head>

<body>
	<?php
	
		$range_down = 0;
		$range_up = 19999;
		
		function is_prime($number){
		if ($number<=1) return false;
		if ($number==2) return true;
		if ($number%2==0) return false;
		$j = (int) sqrt($number);

		for ($i=3; $i<=$j; $i+=2)
			{
			if ($number%$i==0) return false;
			}

		return true;
		}
		
		function in_range($number){
			global $range_down , $range_up;
			if ($number<$range_down or $number>$range_up) return false;
				else return true;
		}
		
		if(isset($_GET['number']))
	    {
		$param = $_GET['number'];
		//echo $param;
		if (is_numeric($param)) 
		{
			if(in_range($param)) 
			{
				if(is_prime($param)) echo "The number $param is prime !"; 
					else  echo "<p class=blue> The number $param is NOT prime !</p>";
			}
				else echo  "<p class=red> The parameter is not within the range [$range_down,$range_up]</p>"; 
		}
			else echo "<p class=red> The parameter is not a number</p>"; 
		}
		
	?>
</body>
</html>
