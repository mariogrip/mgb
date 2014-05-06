<?php
/*
Written and deveoped by mariogrip, pure php!
This is an OpenSorce app for minepeon. you can use as you want.
However there are some rules if you're planing to use my servers
to host your images. However is's safest and much more easy way to go
with my server.
*/

//If you want to host the server your self, you can download the scr here: https://github.com/mariogrip/mgb
$host = "mgb.mariogrip.com"

include_once('../../inc/settings.inc.php');


function curl($url)
{
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL,$url);
    curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
    curl_setopt ($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec ($ch);
    curl_close($ch);
    return $result;
}


function getImageUrl($id){
$url = $host."get.php?id=$id"
return $url;
}

function getNewID(){
$id = md5(rand(0,getrandmax()).rand(0,getrandmax()));
$ids = $this->curl($host."curl.php?cmd=getNewID&id=".$id);
return $id;
}

function updateImage($id, $rate){
$this->curl($host."curl.php?cmd=updateImage&id".$id."&rate=".$rate);
}

?>
