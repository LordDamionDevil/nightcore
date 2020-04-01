<?php
ini_set('max_execution_time',9000);
$servername = "localhost";
$username = "user";
$password = "pass";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $to = "email";
    $subject = "Database Error";

    $message = $conn->connect_error;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\n";

    // More headers
    $headers .= 'From: report@naitokoa.com' . "\n";

    mail($to,$subject,$message,$headers);
}

function getDescriptionOne($token) {
    $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=nightcore&maxResults=50&key=AIzaSyDhFHdCAkvU9iSmZbH0N9C_1D64BsUawzI&type=video&pageToken=".$token;
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_REFERER => 'http://google.com/',
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36',
        CURLOPT_CONNECTTIMEOUT => 500,
        CURLOPT_TIMEOUT => 500,
        CURLOPT_HTTPHEADER, array('Connection: Keep-Alive', 'Keep-Alive: 500'),
    ));
    $resp = curl_exec($curl);
    curl_close($curl);

    $songData = json_decode($resp, true);
    return $songData;
}

$songinfo = getDescriptionOne("");
foreach($songinfo['items'] as $i) {
        if (strpos($i['snippet']['title'], "1 Hour") == false && !empty($songinfo['items'])) {
            $title = $i['snippet']['title'];
            $songid = $i['id']['videoId'];
            $artist = $i['snippet']['channelTitle'];
            $sql = "INSERT INTO nightcore_vids (nightcore, artist, title) VALUES ('".$songid."', '".$artist."','".$title."')";
            if ($conn->query($sql) === TRUE) {
                echo"Success";
            } else {
                echo "Error inserting record: " . $conn->error;
            }
        }else{echo "no";}
}
$next = "";
$next = $songinfo['nextPageToken'];
$ig = 1;
while($ig <= 3){
$songinfo2 = getDescriptionOne($next);
$next = $songinfo2['nextPageToken'];
foreach($songinfo2['items'] as $i) {
        if (strpos($i['snippet']['title'], "1 Hour") == false && !empty($i)) {
            $title = $i['snippet']['title'];
            $songid = $i['id']['videoId'];
            $artist = $i['snippet']['channelTitle'];
            $sql = "INSERT INTO nightcore_vids (nightcore, artist, title) VALUES ('".$songid."', '".$artist."','".$title."')";
            if ($conn->query($sql) === TRUE) {
                echo"Success";
            } else {
                echo "Error inserting record: " . $conn->error;
            }
        }else{echo "no";}
}
$ig++;
}
?>
