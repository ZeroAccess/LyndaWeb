<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>break</title>
</head>
<body>
<?php 
for ($count=0; $count <= 10; $count++) {
	echo $count;
	if ($count == 10) {break;}
	echo ", ";
}
?>

</body>
</html>