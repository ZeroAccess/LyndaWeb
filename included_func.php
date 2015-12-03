<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Includes</title>
</head>
<body>
Text Outside PHP
<br />
<?php
echo "Text Inside PHP";

echo "<br />";

function hello($name) {
	echo "Hello {$name}";
}
?>
</body>
</html>