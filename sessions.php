<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sessions</title>
</head>
<body>
<?php
	$_SESSION['firstName'] = "Glen";
	$_SESSION['lastName'] = "Roberts";
?>    

<?php
	$name = $_SESSION['firstName'] . " " . $_SESSION['lastName'];
	echo $name;
?>
</body>
</html>