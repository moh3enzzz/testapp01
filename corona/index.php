<?php

$corona_path = "https://covid19api.herokuapp.com/latest";
$covid_temp = @file_get_contents($corona_path);
$latest_covid = json_decode($covid_temp,true);
echo number_format($latest_covid["confirmed"]);
echo "<br>";
echo number_format($latest_covid["deaths"]);

?>
