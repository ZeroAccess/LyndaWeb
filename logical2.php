<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logical Expressions 2</title>
</head>
<body>
<?php $a = 2; ?>
<?php
	switch($a) {
		case 0: 
			echo "a equals 0";
			break;
		case 1: 
			echo "a equals 1";
			break;
		case 2:
			echo "a equals 2";
			break;
		default:
			echo "a is not 0,1, or 2";
			break;
	}
?>
</body>
</html>