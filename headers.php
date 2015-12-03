<?php
	//This is how you redirect a page
	header("Location: arrays.php");
	exit;

	//This is how you return a 404 error
	//header("HTTP/1.0 404 NOT FOUND");
	//exit;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Headers</title>
</head>
<body>
<?php
//header("Content-type: application/pdf");
//header("Content-type: application/vnd.ms-excel; name='excel'");
//header("Content-disposition: attachment; filename=myfile.xls");

//You can also put headers/sessions first and not worry about the
//output buffer.

//If output buffer is off we can manually turn it on by
//assigning ob_start(); at the TOP of the page (before <html>)
//and then assigning on_end_flush(); at the VERY end

?>
</body>
</html>