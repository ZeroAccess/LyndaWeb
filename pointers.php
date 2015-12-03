<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pointers</title>
</head>
<body>
<?php 
	$ages = array(4, 8, 15, 16, 23, 42);
?>
<?php
	echo "1: " . current($ages) . "<br />";
	next($ages);
	echo "2: " . current($ages) . "<br />";
	reset($ages);
	echo "3: " . current($ages) . "<br />";
?>
<br />
<?php
	//while loop that moves the array pointer
	while($age = current($ages)) {
		echo $age . ", ";
		next($ages);
	}
?>
</body>
</html>