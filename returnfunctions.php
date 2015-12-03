<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Return Functions</title>
</head>
<body>
<?php 
/*function name($arguements)  {
**statement;
**} */
	function say_hello() {
		echo "Hello World! <br />";
	}
	say_hello();
	
		function say_hello2($word) {
		echo "Hello {$word}! <br />";
	}
	say_hello2("World");
	say_hello2("Universe");

	$name = "John Doe";
	say_hello2($name);
	
	//$target is an internal variable that is only used within 
	//the function
	function say_hello3($greeting, $target, $punct) {
		echo $greeting . ", " . $target . $punct ."<br />";
		return true;
	}
	say_hello3("Greetings" , $name, "!");
?>
<br />
<?php
	function addition($val1, $val2) {
		$sum = $val1 + $val2;
		return $sum;
	}
	$new_val = addition(3,4);
	echo $new_val;
	echo "<br />";
	
	$new_val2 = addition(5,6) ==11 ;
	echo "yes";
	echo "<br />";
	
	function add_subt($val1, $val2) {
		$add = $val1 + $val2;
		$subt = $val1 - $val2;
		$result = array($add, $subt);
		return $result;
	}
	$result_array = add_subt(10,5);
	echo "Add: " . $result_array[0];
	echo "<br />";
	echo "Subt: " .  $result_array[1];
	
?>
</body>
</html>