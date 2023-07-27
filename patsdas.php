<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
    $connect = mysqli_connect("localhost", "root", "", "json_test");

    $res = mysqli_query($connect, "SELECT value FROM test_json") or die (mysqli_error($connect));
    $data=[];
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }

    for ($i=0; $i < count($data) ; $i++) { 
        foreach ($data[$i] as $key => $value) {
            
            echo  $value . "<br>";
        }
    }

    mysqli_query($connect, "INSERT INTO test_json(value) VALUES('user')") or die(mysqli_error($connect));
?>