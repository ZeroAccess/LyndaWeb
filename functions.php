<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Functions</title>
</head>
<body>
<?php 
/*function name($arguements)  {
**statement;
**} */
	function say_hello() {
		echo "Hello World! <br />";
	}
	say_hello();
	
		function say_hello2($word) {
		echo "Hello {$word}! <br />";
	}
	say_hello2("World");
	say_hello2("Universe");
?>
</body>
</html>