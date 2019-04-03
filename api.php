<?php
require "inc/ytdownload.php";
$yt = new YouTubeDownloader();

$links = $yt->getDownloadLinks("https://www.youtube.com/watch?v=0K2d311ZG8E");


?>

<pre>
    <?php var_dump($links); ?>
</pre>
