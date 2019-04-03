<?php
include_once $_SERVER['DOCUMENT_ROOT']  . '/inc/head.php';
include_once $_SERVER['DOCUMENT_ROOT']  . "/inc/functions.php";
?>
<div style="margin-top: 25px;">
    <?php
    $send = $_GET['sent'];

    if (isset($_GET['sent'])) {
        if ($send == "true") {
            echo "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Email Sent!
                 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
                </div><br><br>
                ";
        }
    }
    ?>
    <h1>Contact Us</h1>
    <small>Do you have any questions? Just contact us via this form</small><br><br>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <form class="contact-form" action="/proc.php?a=contact" method="post">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 135px;"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send" class="btn btn-white text-white btn-outline-danger">
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h3>Information:</h3>
            <p>You can email us at team@nightcore.co.uk or you can use this contact form and we will email you back.<br><br>You can contact us about:
            </p><li>Data Request</li>
            <li>API Access</li>
            <li>Song Request</li>
            <li>Joining our Team</li>
            <li>Suggestions</li>
            <li>Bugs</li>
            <p></p>
        </div>
