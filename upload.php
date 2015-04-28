<?php
/*
Mit diesem Script können Sie *gif und *jpg bilder
auf einen Server laden.
*/
$tempname = $_FILES['file']['tmp_name'];
$name = $_FILES['file']['name'];
$type = $_FILES['file']['type'];
$size = $_FILES['file']['size'];
if($type != "image/*" && $type != "image/pjpeg") {
    $err[] = "Es dürfen nur jpeg Dateien hochgeladen werden.";
}
if($size > "15000000") {
    $err[] = "Die Datei welche du hochladen willst, ist zu groß!<br>Maximale Dateigröße beträgt 15 MB!";
}
if(empty($err)) {
    copy("$tempname","<-- Hier den Absoluten Pfad angeben -->");
    echo "Die Datei $name wurde erfolgreich hochgeladen!";
}
else {
    foreach($err as $error)
    echo "$error<br>";
}
?>