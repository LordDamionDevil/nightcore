<?php

include_once $_SERVER['DOCUMENT_ROOT']  . "/inc/functions.php";

$song = randomSong($conn);

header("Location: https://nightcore.co.uk/watch.php?v={$song['nightcore']}");
exit();

?>