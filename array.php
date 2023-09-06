<?php
    $arr=array("this","that","then");
    echo $arr[0];
    echo "<br>";
    echo $arr[2];
    echo "<br>";
    echo $arr[1];
    echo "<br>";

    // associative array

    $favCol = array(
        'sahil'=>'blue',
        'shakti'=>'gray',
        'sharma'=>'black'
    );

    echo $favCol['sahil'];
    echo "<br>";


    foreach($favCol as $key => $value){
        echo "<br> $key  => $value";
    }

    foreach($arr as $value){
        echo "<br> $value";
    }
?>