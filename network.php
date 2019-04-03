<?php
include_once $_SERVER['DOCUMENT_ROOT']  . '/inc/head.php';
include_once $_SERVER['DOCUMENT_ROOT']  . "/inc/functions.php";
?>
<div style="margin-top: 25px;">
    <h1>Join our network</h1>
    <small>Do you want to join a community with loads of nightcore creators? Get signed up!</small>
    <br><br>    <?php
    $send = $_GET['sent'];

    if (isset($_GET['sent'])) {
        if ($send == "true") {
            echo "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Application Sent!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
                </div>
                ";
        }
    }
    ?><br><br>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3>Application Form:</h3>
            <form class="contact-form" action="/proc.php?a=apply" method="post">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your name">
                </div>
                <div class="form-group">
                    <label for="channellink">Channel Link</label>
                    <input type="text" name="channellink" class="form-control" id="channellink" placeholder="https://youtube.com/NightcoreFan">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <label for="message">Why should we pick you?</label>
                    <textarea class="form-control" id="why" name="why" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 135px;"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Apply!" class="btn btn-white text-white btn-outline-danger">
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h3>Information:</h3>
            <p>If you join us you can get these cool perks!.<br><br>Perks:
            <li>Access to our PRIVATE discord</li>
            <li>Adobe Software help</li>
            <li>Access to our member panel</li>
            <li>Collaborate with other creators</li>
            <li>Add your uploads to the website</li>
            <li>Take part in amazing events</li>
            </p>
        </div>
    </div>

</div>
