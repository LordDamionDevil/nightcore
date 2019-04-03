<?php

$servername = "localhost";
$username = "nightcore_site";
$password = "syopILHYDky9Hqnal";
$dbname = "nightcore_site";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $to = "brandon4657@hotmail.com";
    $subject = "Database Error";

    $message = $conn->connect_error;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\n";

    // More headers
    $headers .= 'From: team@nightcore.co.uk' . "\n";

    mail($to,$subject,$message,$headers);
}

function randomSong($conn) {
$sql = "SELECT * FROM nightcore_vids ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        return $row;
    }
} else {
    echo "0 results";
}
}

function getInfo($conn, $songid) {
    $sql = "SELECT * FROM nightcore_vids WHERE nightcore = '".$songid."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            return $row;
        }
    } else {
        echo "0 results";
    }
}

function getDescription($songid) {
    $url = "https://www.googleapis.com/youtube/v3/videos?part=snippet%2Cstatistics&id=".$songid."&key=AIzaSyDhFHdCAkvU9iSmZbH0N9C_1D64BsUawzI";
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_REFERER => 'http://google.com/',
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36',
        CURLOPT_CONNECTTIMEOUT => 15,
        CURLOPT_TIMEOUT => 15,
        CURLOPT_HTTPHEADER, array('Connection: Keep-Alive', 'Keep-Alive: 300'),
    ));
    $resp = curl_exec($curl);
    curl_close($curl);

    $songData = json_decode($resp, true);
    return $songData;
}

function getDescriptionOne($songid) {
    $url = "https://www.googleapis.com/youtube/v3/videos?part=snippet%2Cstatistics&id=".$songid."&key=AIzaSyDhFHdCAkvU9iSmZbH0N9C_1D64BsUawzI";
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_REFERER => 'http://google.com/',
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36',
        CURLOPT_CONNECTTIMEOUT => 15,
        CURLOPT_TIMEOUT => 15,
        CURLOPT_HTTPHEADER, array('Connection: Keep-Alive', 'Keep-Alive: 300'),
    ));
    $resp = curl_exec($curl);
    curl_close($curl);

    $songData = json_decode($resp, true);
    return $songData;
}

function getDescriptionTwo($songid) {
    $url = "https://www.googleapis.com/youtube/v3/videos?part=snippet%2Cstatistics&id=".$songid."&key=AIzaSyDhFHdCAkvU9iSmZbH0N9C_1D64BsUawzI";
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_REFERER => 'http://google.com/',
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36',
        CURLOPT_CONNECTTIMEOUT => 15,
        CURLOPT_TIMEOUT => 15,
        CURLOPT_HTTPHEADER, array('Connection: Keep-Alive', 'Keep-Alive: 300'),
    ));
    $resp = curl_exec($curl);
    curl_close($curl);

    $songData = json_decode($resp, true);
    return $songData;
}

?>