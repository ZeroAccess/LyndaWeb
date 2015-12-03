<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booleans</title>
</head>
<?php 
	$bool1 = true;
	$bool2 = false;
?>

$bool1: <?php echo $bool1; ?> <br />
$bool2: <?php echo $bool2; ?> <br />
<br />
<?php
	$var1 = 3;
	$var2 = "cat";
	$var4 = NULL;
?>
$var1 is set: <?php echo isset($var1); ?> <br />
$var2 is set: <?php echo isset($var2); ?> <br />
$var3 is set: <?php echo isset($var3); ?> <br />

<?php unset($var1); ?>

$var1 is set: <?php echo isset($var1); ?> <br />
$var2 is set: <?php echo isset($var2); ?> <br />
$var3 is set: <?php echo isset($var3); ?> <br />
<br />
$var1 empty: <?php echo empty($var1); ?> <br />
$var4 empty: <?php echo empty($var4); ?> <br />

<body>
</body>
</html>