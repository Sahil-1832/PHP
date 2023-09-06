<?php
    $arr=array(array(12,13,14),array(15,16,17),array(18,19,20));

    for($i=0;$i<count($arr);$i++)
    {
        for($j=0;$j<count($arr[$i]);$j++)
        {
            echo $arr[$i][$j]." ";
        }
        echo "<br>";
    }
?>