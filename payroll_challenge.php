<?php

$reg_hours = 40;
$hours = 45;
$rate = 10;
$overtime_rate = $rate * 1.5;
$overtime_hours = 5;
$pay;

?>
<!DOCTYPE html>
<html lang = "en">
<body>
<h1>Its Pay Day!</h1>
<p><?php
if ($hours <= $reg_hours) {
  $pay = $hours * $rate;
} elseif ($hours > $reg_hours) {
  $pay = ($reg_hours * $rate) + ($overtime_hours * $overtime_rate);
}
echo "Your check for $pay dollars is in the mail.";
?>
</p>
</body>
</html>
