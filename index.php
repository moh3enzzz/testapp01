<?php

echo "welcome"."<br>";
echo "The time is " . date("h:i:sa")."<br>";

date_default_timezone_set('Australia/Melbourne');
echo "The time is " . date("h:i:sa")."<br>";

date_default_timezone_set('Asia/Qatar');
echo "The time is " . date("h:i:sa")."<br>";

date_default_timezone_set('Asia/Dubai');
echo "The time is " . date("h:i:sa")."<br>";


?>
