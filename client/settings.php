<?php
/*
Written and deveoped by mariogrip, pure php!
This is an OpenSorce app for minepeon. you can use as you want.
However there are some rules if you're planing to use my servers
to host your images. However is's safest and much more easy way to go
with my server.
*/

include_once('../../inc/settings.inc.php');
include('mgb.php');

$writeSettings=false;

if ($settings['mgb_pid'] == "" || $settings['mgb_did'] == "" || $settings['mgb_uid'] == ""){
getNewID();
}


include('../../head.php');
include('../../menu.php');

?>
<div class="container">
<center>
Public ID: <?php $settings['mgb_uid'] ?><br>
Private ID: <?php $settings['mgb_pid'] ?><br>
Device ID: <?php $settings['mgb_did'] ?>

</center>
			

        </div>
<?php

include('../../foot.php');
