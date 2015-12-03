<?php
	//1. Create a database connection
	$connection = mysql_connect("localhost", "root", "randstad123");
	if (!$connection) {
		die("Database connection failed: " .mysql_error());
	}
	
	//2. Select a database to use
	$db_select = mysql_select_db("widget_corp", $connection);
	if (!$db_select) {
		die("Databsae selection failed: " .mysql_error());
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Databases</title>
</head>
<body>
<?php
	//3. Perform database query
	$result = mysql_query("SELECT * FROM subjects", $connection);
	if(!$result) {
		die("Database query failed: " .mysql_error());
	}
	
	//4. Use returned data
	while ($row = mysql_fetch_array($result)) {
		echo $row[1]." ".$row["position"]."<br />"; 
		// can grab by number or name
	}
?>
</body>
</html>

<?php
	//5. Close connection
	mysql_close($connection);
?>