<?php
include_once $_SERVER['DOCUMENT_ROOT']  . '/inc/head.php';
include_once $_SERVER['DOCUMENT_ROOT']  . "/inc/functions.php";
$songid = $_GET['v'];
$songinfo = getInfo($conn, $songid);
$chinfo = getDescription($songid);
$randomone = randomSong($conn);
$randomtwo = randomSong($conn);
$randomthree = randomSong($conn);
$randomfour = randomSong($conn);
$randomfive = randomSong($conn);
$randomsix = randomSong($conn);
$randomseven = randomSong($conn);
$randomeight = randomSong($conn);

$rone = getDescriptionOne($randomone['nightcore']);
$rtwo = getDescriptionTwo($randomtwo['nightcore']);
$rthree = getDescriptionTwo($randomthree['nightcore']);
$rfour = getDescriptionTwo($randomfour['nightcore']);
$rfive = getDescriptionTwo($randomfive['nightcore']);
$rsix = getDescriptionTwo($randomsix['nightcore']);
$rseven = getDescriptionTwo($randomseven['nightcore']);
$reight = getDescriptionTwo($randomeight['nightcore']);
?>
<style>
    .player1 {
        position: relative;
        padding-bottom: 56.25%; /* Default for 1600x900 videos 16:9 ratio*/
        padding-top: 0px;
        height: 0;
        overflow: hidden;
    }
    .player1 iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
    <div class="row justify-content-center" style="margin-top: 25px;">
        <div class="col-md-12"><div class="player1"><div id="player"></div></div></div>
        <div class="col-md-12" style="margin-top: 5px;">
        <div class="card" style="background-color: #a2261d;">
            <div class="card-body">
                <a href="https://youtu.be/<?php echo $songid; ?>" style="text-decoration: none;"><h3 class="card-title text-white">Nightcore - <?php echo $songinfo['title']; ?></h3></a>
                <p class="card-text text-white"><a href="https://www.youtube.com/channel/<?php echo $chinfo['items'][0]['snippet']['channelId']; ?>" style="text-decoration: none; color: #fff!important;">Nightcore by <?php echo $chinfo['items'][0]['snippet']['channelTitle']; ?></a><br>
                    <?php echo number_format($chinfo['items'][0]['statistics']['viewCount']); ?> total views&nbsp;&nbsp;<i class="far fa-thumbs-up">&nbsp;<?php echo number_format($chinfo['items'][0]['statistics']['likeCount']); ?></i>&nbsp;&nbsp;<i class="far fa-thumbs-down">&nbsp;<?php echo number_format($chinfo['items'][0]['statistics']['dislikeCount']); ?></i>
                </p>
            </div>
        </div>
        </div>
    </div>
<div class="row justify-content-center" style="margin-top: 25px;">
<div class="col-md-3">
    <a href="https://nightcore.co.uk/watch.php?v=<?php echo $randomone['nightcore']; ?>" style="text-decoration: none;">
        <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
            <img class="card-img-top" src="<?php echo $rone['items'][0]['snippet']['thumbnails']['medium']['url']; ?>" alt="Card image">
            <div class="card-body" style="min-height:80px; max-height:80px;">
                <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $randomone['title']; ?></h5>
            </div>
        </div>
    </a>
</div>
    <div class="col-md-3">
    <a href="https://nightcore.co.uk/watch.php?v=<?php echo $randomtwo['nightcore']; ?>" style="text-decoration: none;">
        <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
            <img class="card-img-top" src="<?php echo $rtwo['items'][0]['snippet']['thumbnails']['medium']['url']; ?>" alt="Card image">
            <div class="card-body" style="min-height:80px; max-height:80px;">
                <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $randomtwo['title']; ?></h5>
            </div>
        </div>
    </a>
    </div>
    <div class="col-md-3">
        <a href="https://nightcore.co.uk/watch.php?v=<?php echo $randomthree['nightcore']; ?>" style="text-decoration: none;">
            <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                <img class="card-img-top" src="<?php echo $rthree['items'][0]['snippet']['thumbnails']['medium']['url']; ?>" alt="Card image">
                <div class="card-body" style="min-height:80px; max-height:80px;">
                    <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $randomthree['title']; ?></h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="https://nightcore.co.uk/watch.php?v=<?php echo $randomfour['nightcore']; ?>" style="text-decoration: none;">
            <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                <img class="card-img-top" src="<?php echo $rfour['items'][0]['snippet']['thumbnails']['medium']['url']; ?>" alt="Card image">
                <div class="card-body" style="min-height:80px; max-height:80px;">
                    <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $randomfour['title']; ?></h5>
                </div>
            </div>
        </a>
    </div>
    <div class="w-100" style="margin-top: 5px;"></div>
    <div class="col-md-3">
        <a href="https://nightcore.co.uk/watch.php?v=<?php echo $randomfive['nightcore']; ?>" style="text-decoration: none;">
            <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                <img class="card-img-top" src="<?php echo $rfive['items'][0]['snippet']['thumbnails']['medium']['url']; ?>" alt="Card image">
                <div class="card-body" style="min-height:80px; max-height:80px;">
                    <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $randomfive['title']; ?></h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="https://nightcore.co.uk/watch.php?v=<?php echo $randomsix['nightcore']; ?>" style="text-decoration: none;">
            <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                <img class="card-img-top" src="<?php echo $rsix['items'][0]['snippet']['thumbnails']['medium']['url']; ?>" alt="Card image">
                <div class="card-body" style="min-height:80px; max-height:80px;">
                    <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $randomsix['title']; ?></h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="https://nightcore.co.uk/watch.php?v=<?php echo $randomseven['nightcore']; ?>" style="text-decoration: none;">
            <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                <img class="card-img-top" src="<?php echo $rseven['items'][0]['snippet']['thumbnails']['medium']['url']; ?>" alt="Card image">
                <div class="card-body" style="min-height:80px; max-height:80px;">
                    <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $randomseven['title']; ?></h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="https://nightcore.co.uk/watch.php?v=<?php echo $randomeight['nightcore']; ?>" style="text-decoration: none;">
            <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                <img class="card-img-top" src="<?php echo $reight['items'][0]['snippet']['thumbnails']['medium']['url']; ?>" alt="Card image">
                <div class="card-body" style="min-height:80px; max-height:80px;">
                    <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $randomeight['title']; ?></h5>
                </div>
            </div>
        </a>
    </div>
</div>
</div>
</div>
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
            height: '450',
            width: '763',
            videoId: '<?php echo $songid; ?>',
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
        if(event.data === 0) {
            window.location.href = "https://nightcore.co.uk/randomsong.php";
        }
    }
    function stopVideo() {
        player.stopVideo();
    }
</script>
<br><br><br><br>