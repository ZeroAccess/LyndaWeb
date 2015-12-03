<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arrays</title>
</head>
Arrays: are like Java start at 0 <br />
<br />
<?php $array1 = array(4,8,15,16,23,42); ?>
<pre><?php print_r($array1); ?></pre>
<br />
Retrieving Location of 1: <?php echo $array1[1]; ?> <br />
<br />
<?php $array2 = array(6,"fox","dog",array("x", "y", "z")); ?>
<pre><?php print_r($array2); ?></pre> 
<br />
Retrieving Location of 2: <?php echo $array2[2]; ?> <br />
<br />
Retrieving Location of 3 1: <?php echo $array2[3][1]; ?> <br />
<br />
Retrieving Location of 3: <?php echo $array2[2]; ?> <br />
<br />
Changed Location of 3 to cat <?php $array2[2] = "cat"; ?> <br />
<br />
Retrieving Location of 3: <?php echo $array2[2]; ?><br />
<br />
<?php $array3 = array("firstName" => "Kevin", "lastName" => "Skoglund"); ?>
<?php echo $array3["firstName"] . " " . $array3["lastName"]; ?> <br />
<?php $array3["firstName"] = "Larry"; ?>
<?php echo $array3["firstName"] . " " . $array3["lastName"]; ?> <br />

<body>
</body>
</html>