<?php
    echo "Welcome to php";
    echo "<br>";

    function  processMarks($marksArr){
        $sum=0;
        for($i=0;$i<count($marksArr);$i++)
            $sum+=$marksArr[$i];
        
        echo "Sum is ".$sum;
    }

    $sahil=[23,34,12,34,56];

    processMarks($sahil);
?>