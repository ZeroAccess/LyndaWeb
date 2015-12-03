<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Type Casting</title>
</head>
<body>

<?php
	$var1 = "2 brown foxes";
	$var2 = $var1 + 3;
	
	echo $var1;
?>
<br />
<?php 
	echo gettype($var1); echo "<br />";
	echo gettype($var2); echo "<br />";
	settype($var2, "string");
	echo gettype($var2); echo "<br />";
	$var3 = (int) $var1;
	echo gettype($var3); echo "<br />";
?>

<?php echo is_array($var1); ?> <br />
<?php echo is_bool($var1); ?> <br />
<?php echo is_float($var1); ?> <br />
<?php echo is_int($var1); ?> <br />
<?php echo is_null($var1); ?> <br />
<?php echo is_numeric($var1); ?> <br />
String: <?php echo is_string($var1); ?> <br />

</body>
</html>