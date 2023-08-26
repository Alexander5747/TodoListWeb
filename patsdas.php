<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $state;
    foreach($data as $elem){
         $state = $elem;
    }

    
    $link = mysqli_connect("localhost","root","", "json_test");

    $queryInsert = mysqli_query($link,"INSERT INTO test_json (value) VALUES ('$state')");

?>