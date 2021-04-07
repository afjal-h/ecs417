<?php


require_once('connection.php');
$all_data = array();

$sql = "SELECT * FROM posts";
$query = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($query)) {
    $all_data[] = $row;
}
function date_compare($a, $b)
{
    $t1 = strtotime($a['date']);
    $t2 = strtotime($b['date']);
    return $t2 - $t1;
}


usort($all_data, "date_compare");


 ?>
