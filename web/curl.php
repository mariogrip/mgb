<?php
/*
Written and deveoped by mariogrip, pure php!
This is an OpenSorce app for minepeon. you can use as you want.
However there are some rules if you're planing to use my servers
to host your images. However is's safest and much more easy way to go
with my server.
*/

include_once("conf.php");
$mysqli = mysqli_connect($host,$user,$pass,$base)or die("Server error.");


if (isset($_POST['cmd']) || isset($_POST['id'])){
if ($_POST['cmd'] == "updateData"){
updateData($_POST['id'], $_POST['rate'], $mysqli);
}
if ($_POST['cmd'] == "getNewID"){
$id = createNew($_POST['id'], $mysqli);
echo $id['uid'] . "|" . $id['pid'];
}
}

?>
