<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Numbers: Integers</title>
</head>
<?php
$var1 = 3;
$var2 = 4;
?>
Basic Math: <?php echo ((1 + 2 + $var1) * $var2) /2 - 5; ?>
<br />

+=: <?php $var2 += 4; echo $var2; ?><br />
-=: <?php $var2 -= 4; echo $var2; ?><br />
*=: <?php $var2 *= 3; echo $var2; ?><br />
/=: <?php $var2 /= 4; echo $var2; ?><br />
<br />
Increment: <?php $var2 ++; echo $var2; ?><br />
Decrement: <?php $var2 --; echo $var2; ?><br />

<body>
</body>
</html>