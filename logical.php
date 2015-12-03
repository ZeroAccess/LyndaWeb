<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logical Expressions</title>
</head>
<body>
<?php
	$a = 5;
	$b = 6;
	
	if ($a > $b) {
		echo "a is larger than b";
	} else if ($a == $b) {
		echo "a equals b";
	} else {
		echo "a is smaller than b";
	}
?>
<br />
<?php 
	$c = 2;
	$d = 20;
	if (($a > $b) && ($c > $d)) {
		echo "a is larger then b AND ";
		echo "c is larger than d";
	}
	if (($a > $b) || ($c > $d)) {
		echo "a is larger than b OR ";
		echo "c is larger than d";
	} else {
		echo "neither a is larger than b or c is larger than d";
	}
	?>
    <br />
<?php
	unset($a);
	if(!isset($a)) {
		$a = 100;
	}
	echo $a;
?>
    <br />
<?php 
	if (is_int($a)) {
		settype($a, "string");
	}
	echo gettype($a);
?>
</body>
</html>