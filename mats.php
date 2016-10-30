<?php
$f = fopen("./js/tempJson.txt", "r");
$t = fread($f, filesize("./js/tempJson.txt"));
$js = json_decode($t, true);
fclose($f);
$f = fopen("./js/temptagsJson.txt", "r");
$t = fread($f, filesize("./js/temptagsJson.txt"));
$tags = json_decode($t, true);
fclose($f);
?>