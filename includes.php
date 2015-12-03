<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Includes</title>
</head>
<body>
<?php
	// won't throw an error if it's not there
	// include("included_func.php");

	//will throw an error if it can't find it, use this for 
	// functions
	require("included_func.php");
	
	//also have require_once which will use it once
	
	hello("Glen Roberts");
?>
</body>
</html>