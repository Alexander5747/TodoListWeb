<?php 
$link = mysqli_connect("localhost","root","", "json_test");
$queryView = mysqli_query($link,"SELECT value FROM test_json");
$d_json=[];

$rows = mysqli_fetch_all($queryView, MYSQLI_ASSOC);

foreach($rows as $row => $value){
    foreach($value as $elem){
        $d_json[]= $elem;
    }
}

$response_json = json_encode($d_json);
echo $response_json;
?>