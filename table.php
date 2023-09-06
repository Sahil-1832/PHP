<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="next"; 

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Connection failed");
    }
    else{
        echo "Connection successfull";
    }

    $sql="create table trip (
        sno int(6) not null auto_increment primary key,
        name varchar(12) not null,
        dest varchar(6) not null) ";

    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<br>DB was created";
    }
    else {
        echo "DB was no created";
    }
?>