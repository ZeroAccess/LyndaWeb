<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Second Page</title>
</head>
<body>
<a href="firstpage.php"> First Page</a>
<!-- rawurlencode before the ? mark urlencode anything after ? -->

<?php
	print_r($_GET);
	$id = $_GET['id'];
	$name = $_GET['name'];
	echo "<br /><strong>" . $id . ": {$name}</strong>";
?>
<br />
<?php
$string = "Glen Roberts";
echo urlencode($string);
echo "<br />";
echo rawurlencode($string);
?>
</body>
</html>