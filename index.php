<?php
include_once $_SERVER['DOCUMENT_ROOT']  . '/inc/head.php';
include_once $_SERVER['DOCUMENT_ROOT']  . "/inc/functions.php";

$oneid = randomSong($conn);
$twoid = randomSong($conn);
$threeid = randomSong($conn);
$fourid = randomSong($conn);
$fiveid = randomSong($conn);
$sixid = randomSong($conn);

?>
    <div class="row" style="margin-top: 25px;">
        <div class="col-sm-4">
            <a href="watch.php?v=<?php echo $oneid['nightcore'] ?>" style="text-decoration: none;">
            <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                <img class="card-img-top" src="https://img.youtube.com/vi/<?php echo $oneid['nightcore']; ?>/mqdefault.jpg" alt="Card image cap">
                <div class="card-body" style="min-height:80px; max-height:80px;">
                    <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $oneid['title']; ?></h5>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="watch.php?v=<?php echo $twoid['nightcore'] ?>" style="text-decoration: none;">
                <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                    <img class="card-img-top" src="https://img.youtube.com/vi/<?php echo $twoid['nightcore']; ?>/mqdefault.jpg" alt="Card image cap">
                    <div class="card-body" style="min-height:80px; max-height:80px;">
                        <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $twoid['title']; ?></h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="watch.php?v=<?php echo $threeid['nightcore'] ?>" style="text-decoration: none;">
                <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                    <img class="card-img-top" src="https://img.youtube.com/vi/<?php echo $threeid['nightcore']; ?>/mqdefault.jpg" alt="Card image cap">
                    <div class="card-body" style="min-height:80px; max-height:80px;">
                        <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $threeid['title']; ?></h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <a href="watch.php?v=<?php echo $fourid['nightcore'] ?>" style="text-decoration: none;">
                <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                    <img class="card-img-top" src="https://img.youtube.com/vi/<?php echo $fourid['nightcore']; ?>/mqdefault.jpg" alt="Card image cap">
                    <div class="card-body" style="min-height:80px; max-height:80px;">
                        <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $fourid['title']; ?></h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="watch.php?v=<?php echo $fiveid['nightcore'] ?>" style="text-decoration: none;">
                <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                    <img class="card-img-top" src="https://img.youtube.com/vi/<?php echo $fiveid['nightcore']; ?>/mqdefault.jpg" alt="Card image cap">
                    <div class="card-body" style="min-height:80px; max-height:80px;">
                        <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $fiveid['title']; ?></h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="watch.php?v=<?php echo $sixid['nightcore'] ?>" style="text-decoration: none;">
                <div class="card text-white" style="max-width: 320px; background-color: #a2261d;">
                    <img class="card-img-top" src="https://img.youtube.com/vi/<?php echo $sixid['nightcore']; ?>/mqdefault.jpg" alt="Card image cap">
                    <div class="card-body" style="min-height:80px; max-height:80px;">
                        <h5 class="card-title" style="font-size: 17px;">Nightcore - <?php echo $sixid['title']; ?></h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br>
    <p>
        We aim to provide the best nightcore out there! With our system adding 100s of songs everyday to our huge database!
    </p>