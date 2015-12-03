<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>For Each Loops</title>
</head>
<body>
<?php 
	$ages = array(4, 8, 15, 16, 23, 42);
?>
<?php
//using each value
foreach($ages as $age) {
	echo $age . ", ";
}
?>
<br />
<?php
//using each key => value pair
foreach($ages as $position => $age) {
	echo $position . ", " . $age . "<br />";
}
?>
<?php
$prices = array("Brand New Computer" =>2000, "1 month in Lynda.com Training Library" =>25, "Learning PHP" => "priceless");
	foreach($prices as $key => $value) {
	if (is_int($value)) {
		echo $key . ": $" . $value . "<br />";
	} else {
		echo $key . ": " . $value . "<br />";
	}
}
?>

</body>
</html>