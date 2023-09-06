<?php

    function check($value){
        if(isset($value)){
            if(!empty($value))
                return 1;
            else
                return 2;
        }
        else 
            return 3;
    }

    function final_check($value){
        if(check($value)==1)
            echo "OKK...";
        else if(check($value)==2)
            echo "Empty field";
        else
            echo "Not set";
    }

    if(isset($_GET['fname']) && !empty($_GET['fname'])){
        if(isset($_GET['lname']) && !empty($_GET['lname'])){
            if(isset($_GET['date']) && !empty($_GET['date'])){
                if(isset($_GET['month']) && !empty($_GET['month'])){
                    if(isset($_GET['year']) && !empty($_GET['year'])){
                        if(isset($_GET['email']) && !empty($_GET['email'])){
                            if(isset($_GET['password']) && !empty($_GET['password'])){
                                if(isset($_GET['cpassword']) && !empty($_GET['cpassword'])){
                                    if($_GET['password']==$_GET['cpassword']){
                                        echo "Successfully login<br>";
                                        echo "<br>First Name : ".$_GET['fname'];
                                        echo "<br>Last Name  : ".$_GET['lname'];
                                        echo "<br>DOB        : ".$_GET['date']."-".$_GET['month']."-".$_GET['year'];
                                        echo "<br>Email      : ".$_GET['email'];
                                        echo "<br>Password   : ".$_GET['password'];
                                    }
                                    else
                                        echo "Password does not match";
                                }
                                else 
                                    echo "Confirm Password cannot be empty";
                            }
                            else 
                                echo "Password cannot be empty";
                        }
                        else 
                            echo "Email cannot be empty";
                    }
                    else{
                        echo "Year cannot be empty";
                    }
                }
                else
                    echo "Month cannot be empty";
            }
            else 
                echo "Date cannot be empty";
        }else 
            echo "Last Name cannot be empty";
    }
    else
        echo "First Name cannot be empty";
?>