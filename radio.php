<?php
include_once $_SERVER['DOCUMENT_ROOT']  . '/inc/head.php';
include_once $_SERVER['DOCUMENT_ROOT']  . "/inc/functions.php";

$radio = $_GET['radio'];

if ($radio == "cherry") {
    $radioid = "wTIUjjNJYNo";
} elseif ($radio == "clublion") {
    $radioid = "ovDJZeGxiew";
} elseif ($radio == "NightcoreDesire") {
    $radioid = "Vyumt7LZL-8";
} else {
    $radioid = "zxyBti8spS8";
}
$songid = $radioid;
$songData = getDescription($songid);
?>

    <a href="radio.php"><button type="button" class="btn btn-outline-danger radio-buttons">Zero Miz Kun</button></a><a href="radio.php?radio=cherry"><button type="button" class="btn btn-outline-danger radio-buttons">Cherry</button></a><a href="radio.php?radio=clublion"><button type="button" class="btn btn-outline-danger radio-buttons">Clublion</button></a><a href="radio.php?radio=NightcoreDesire"><button type="button" class="btn btn-outline-danger radio-buttons">NightcoreDesire</button></a>

    <div id="player" style="width: 100%;"></div>
    <div class="card"  style="width: 100%; background-color: #a2261d;">
        <div class="card-body">
    <center><a href="https://youtu.be/<?php echo $radioid; ?>" style="text-decoration: none;"><h4 class="text-white"><?php echo $songData['items'][0]['snippet']['title']; ?></h4></a>
    <h3><?php echo $songData['items'][0]['snippet']['channelTitle']; ?></h3>
        <a href="https://www.youtube.com/channel/<?php echo $songData['items'][0]['snippet']['channelId']; ?>?sub_confirmation=1">
             <button type="button" class="btn btn-outline-white">Subscribe</button>
        </a></center>
        </div>
    </div>
    <br>
    <pre style="margin: 0 auto;width: 100%;color: black;font-size: 15px;text-overflow: inherit">
        <?php
       // echo $songData['items'][0]['snippet']['description'];
        ?>
    </pre>
    <p class="text-white" style="margin: 0 auto;width: 70%;color: black;font-size: 20px;">

        All of these radios work as the same as our videos. Meaning if you view someones stream then they still get the view and the watch time.
        Our website does nothing to take from creators. However this being said if you do NOT want your radio on here please <a href="contactus.php">CONTACT US</a>

    </p>
<script>

    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '750',
            width: '1280',
            videoId: '<?php echo $radioid; ?>',
            playerVars: {
                modestbranding: 1
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
    }
    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            done = true;
        }
    }
    function stopVideo() {
        player.stopVideo();
    }
</script>