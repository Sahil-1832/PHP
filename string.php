<?php
    $name="Sahil Sharma";
    echo "Length : ".strlen($name);
    echo "\nWord count : ".str_word_count($name);
    echo "\nReverse : ".strrev($name);
    echo "\nPosition : ".strpos($name,"Sharma");
    echo "\nReplace : ".str_replace("Sahil","Shakti",$name);
    echo "\nRepeat : ".str_repeat($name,4);
    echo "<pre>";
    echo "\nRTrim : ".rtrim("     so Now we go       ");
    echo "\nLTrim : ".ltrim("     so Now we go       ");
    $new_name="Sahil Sharma";
    echo ($name==$new_name);
?>