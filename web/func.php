<?php
/*
Written and deveoped by mariogrip, pure php!
This is an OpenSorce app for minepeon. you can use as you want.
However there are some rules if you're planing to use my servers
to host your images. However is's safest and much more easy way to go
with my server.

Deveoping info:
$pid is Private ID
$uid is Public ID
$did is Device ID
$mysqli is MySql Improved Database
*/

//Updates Data.
function updateData($pid, $did, $rate, $mysqli){
$sql = "SELECT * FROM data WHERE pid = $pid";
$result = mysqli_query($mysqli, $sql);
$count = mysqli_num_rows($result);
if ($count != 0){
$sql = "UPDATE data SET rate = $rate WHERE pid = $pid AND did = $did";
mysqli_query($mysqli, $sql);
return true;
}else{
return false;
}
}

function createNew($did, $mysqli){
//Generate New random Public ID
$id['uid'] = md5(rand(0,getrandmax()).rand(0,getrandmax()));
//Generate New Random Private ID
$id['pid'] = md5(rand(0,getrandmax()).rand(0,getrandmax()));

while ($id['pid'] == $id['uid'] || $id['pid'] == $did || $id['uid'] == $did){
$id['uid'] = md5(rand(0,getrandmax()).rand(0,getrandmax()));
$id['pid'] = md5(rand(0,getrandmax()).rand(0,getrandmax())); 
}
$sql = "INSERT INTO data (uid, rate, pid, did) VALUES ($id['uid'], "0", $id['pid'], $did)";
mysqli_query($mysqli, $sql);
return $id;
}

?>

