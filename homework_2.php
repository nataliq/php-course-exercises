<!DOCTYPE>
<html>

<head>
	<title> My homework 2 </title>	
</head>

<body>
	<?php
	$arr = range(20,1000,37);
	
	function is_prime($number){
		if ($number<=1) return false;
		if ($number==2) return true;
		if ($number%2==0) return false;
		$j = (int) sqrt($number);

		for ($i=3; $i<=$j; $i+=2){
			if ($number%$i==0) return false;
		}
		return true;
	}
	
	function  find_3_prime($ar){
		$i=0;
		foreach ($ar as $value) { 
			if(is_prime($value)) $i++;
			if($i==3) {
				return $value;
				
				break;
			}
		}
		if ($i<3) return "not found";
	
	}	
	
	function check_exists($ar){
		$s = "The number %d %s exist in the array.<br>";
		$array = array(146,284,871);
		foreach($array as $value) {
			if(in_array($value,$ar)) printf ($s,$value,"");
				else printf ($s,$value,"does not");
		}
	}
	
	
	printf( "Third prime number: %s <br>", find_3_prime($arr) );
	check_exists($arr);
	
	?>

</body>
</html>
