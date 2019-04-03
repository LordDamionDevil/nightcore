<?php
include_once $_SERVER['DOCUMENT_ROOT']  . '/inc/head.php';
include_once $_SERVER['DOCUMENT_ROOT']  . "/inc/functions.php";
$s = $_GET['s'];
$page = $_GET['page'];
$limit = 15;
if($page == 0){
    echo'<meta http-equiv="refresh" content="0; URL=search.php?s='. $s .'&page=1">';
    exit;
}
if($page == 1){
    $offset = 0;
} else {
    $offset = ($page - 1) * $limit;
}
$next = $page + 1;
$back = $page - 1;
?>
<div class='row' style='margin-top: 25px;'>
        <?php
        $sql = "SELECT * FROM nightcore_vids WHERE title LIKE '%".$s."%' LIMIT ".$limit." OFFSET ".$offset;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $counter = 0;
            while($row = $result->fetch_assoc()) {
                echo "
                      <div class='col-sm-4' style='padding-bottom: 25px;'>
                      <a href='/watch.php?v=".$row['nightcore']."' style='text-decoration: none;'>
                      <div class='card text-white' style='max-width: 320px; background-color: #a2261d;'>
                      <img class='card-img-top' src='https://img.youtube.com/vi/".$row['nightcore']."/mqdefault.jpg' alt='Card image cap'>
                <div class='card-body' style='min-height:80px; max-height:80px;'>
                    <h5 class='card-title' style='font-size: 17px;'>".$row['title']."</h5>
                    <p class='card-text text-white'>From ".$row['artist']."</p>
                </div>
            </div>
                      </div>
                      ";
                $counter++;
                if ($counter % 3 == 0){
                    echo"<div class='w-100'></div>";
                }
            }
        } else {
            echo "Opps! We don't have the song! Suggest it <a href='contactus.php'>HERE</a>";
        }
        ?>
</div>
<?php
if ($result->num_rows > 14 and !($result->num_rows < 0)) {
echo'<div class="row"><div class="col align-self-center" style="padding-left: 40%;"><nav aria-label="pagination">
<ul class="pagination">
';
if($page != 1){
 echo'<li class="page-item">
  <a class="btn btn-outline-danger" href="?s=' . $s . '&page=' . $back . '">Previous</a>
  </li>&nbsp;&nbsp;&nbsp;&nbsp;';
}
echo'
  <li class="page-item">
  <a class="btn btn-outline-danger" href="?s=' . $s . '&page=' . $next . '">Next</a>
  </li>
  </ul></nav></div></div>';
}elseif(!($result->num_rows == 15)){
    echo'<div class="row"><div class="col align-self-center" style="padding-left: 40%;"><nav aria-label="pagination">
<ul class="pagination">
    <li class="page-item">
  <a class="btn btn-outline-danger" href="?s=' . $s . '&page=' . $back . '">Previous</a>
  </li>
  </ul></nav></div></div>';
};
?>
