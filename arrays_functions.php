<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arrays_Functions</title>
</head>
<?php $array1 = array(4,8,15,16,23,42); ?>

Count: <?php echo count($array1); ?> <br />
Max Value: <?php echo max($array1); ?> <br />
Min Value: <?php echo min($array1); ?> <br />
<br />
Sort: <?php sort($array1); print_r($array1); ?> <br />
Reverse Sort: <?php rsort($array1); print_r($array1); ?> <br />
Implode: <?php echo $string1 = implode(" * ", $array1); ?> <br />
Explode: <?php print_r(explode(" * ", $string1)); ?> <br />
In array: <?php echo in_array(15, $array1); //returns T/F ?> <br />
<body>
</body>
</html>