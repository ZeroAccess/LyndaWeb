<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>String Functions</title>
</head>
<?php
$firstString = "The quick brown fox";
$secondString = " jumped over the lazy dog.";
?>
<?php
$thirdString = $firstString;
$thirdString .= $secondString;
echo $thirdString;
?>
<br />
Lowercase: <?php echo strtolower($thirdString); ?> <br />
Uppercase: <?php echo strtoupper($thirdString); ?> <br />
Uppercase first-letter: <?php echo ucfirst($thirdString); ?> <br />
Uppercase words: <?php echo ucwords($thirdString); ?> <br />
Length: <?php echo strlen($thirdString); ?> <br />
Trim: <?php echo $fourthString = $firstString .trim ($secondString); ?> <br />
Find: <?php echo strstr($thirdString, "brown"); ?> <br />
Replace by string: <?php echo str_replace("quick", "super-fast", $thirdString); ?> <br />

Repeat: <?php echo str_repeat($thirdString, 2); ?> <br />

Find Position: <?php echo strpos($thirdString, "brown"); ?> <br />
Find Character: <?php echo strchr($thirdString, "z"); ?> <br />
Make Substring: <?php echo substr($thirdString, 4,11); ?> <br />






<body>
</body>
</html>