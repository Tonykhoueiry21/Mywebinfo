<?php
$myfile = fopen("location.txt", "a");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET ["long"];
fwrite($myfile, $txt);
fclose($myfile);
?>
