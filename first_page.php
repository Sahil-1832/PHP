
    <?php
    //    phpinfo();
    // $radius=5;
    // echo ("Radius : ".$radius);
    // echo ("<br>Diameter : ".(2*$radius));
    // echo ("<br>Area : ".(3.14*$radius*$radius));
    // echo ("<br>Circumfrence : ".(2*3.14*$radius));

    // $age='23';
    // if($age==23)
    //     echo ("Your age is 23");

    // if($age===23)
    //     echo "<br>Age : 23";

    // $value=10;

    // if($value==10)
    //     echo ("Value is Same");
    // else
    //     echo ("Value is not same");

    // $day=3;

    // if($day==1)
    //     echo ("Today is Monday");
    // else if($day==2)
    //     echo ("Today is Tuesday");
    // else if($day==3)
    //     echo ("Today is Wednesday");
    // else if($day==4)
    //     echo ("Today is Thrusday");
    // else if($day==5)
    //     echo ("Today is Friday");
    // else if($day==6)
    //     echo ("Today is Saturday");
    // else if($day==7)
    //     echo ("Today is Sunday");
    // else
    //     echo ("Invalid input");

    // switch($day){
    //     case 1: 
    //         echo ("Monday");
    //         break;
    //     case 2:
    //         echo ("Tuesday");
    //         break;
    //     case 3:
    //         echo ("Wednesday");
    //         break;
    //     case 4:
    //         echo ("Thrusday");
    //         break;
    //     case 5:
    //         echo ("Friday");
    //         break;
    //     case 6:
    //         echo ("Saturday");
    //         break;
    //     case 7:
    //         echo ("Sunday");
    //         break;
    //     default:
    //         echo ("Invalid input");
    //         break;
    // }

    echo ("---> Menu <--- \n1. If_else_if ladder\n2. Switch statement\n");
    $value=readline("Enter your choice : ");
    $day=readline("Enter the day number : ");

    if($value==1){
        echo ("You choose If_else_if ladder\n");
        if($day==1)
        echo ("Today is Monday");
    else if($day==2)
        echo ("Today is Tuesday");
    else if($day==3)
        echo ("Today is Wednesday");
    else if($day==4)
        echo ("Today is Thrusday");
    else if($day==5)
        echo ("Today is Friday");
    else if($day==6)
        echo ("Today is Saturday");
    else if($day==7)
        echo ("Today is Sunday");
    else
        echo ("Invalid input");
    }
    else if($value==2){
        echo ("You choose Switch statement\n");
        switch($day){
            case 1: 
                echo ("Monday");
                break;
            case 2:
                echo ("Tuesday");
                break;
            case 3:
                echo ("Wednesday");
                break;
            case 4:
                echo ("Thrusday");
                break;
            case 5:
                echo ("Friday");
                break;
            case 6:
                echo ("Saturday");
                break;
            case 7:
                echo ("Sunday");
                break;
            default:
                echo ("Invalid input");
                break;
        }
    }
    else
        echo ("Invalid input");
    
    ?>