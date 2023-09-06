<?php
    //Connecting to the Database
    $servername="localhost";
    $username="root";
    $password="";

    //Create a connection
    $conn=mysqli_connect($servername,$username,$password);
    
    //Create a database
    $sql="create database next"; 
    $result=mysqli_query($conn,$sql); 
    echo var_dump($result);


    //Die if connection is not successful
    if(!$conn){
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }
    else{
        echo "Connect successfull";
    }

?>