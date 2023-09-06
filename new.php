<?php
    $a=$_GET['first_number'];
    $b=$_GET['second_number'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <h3>Enter first number : </h3>
    <input type="number" name="first_number" min="1" value="<?php echo $a+$b-$a; ?>">
    <h3>Enter second number : </h3>
    <input type="number" name="second_number" min="1" value="<?php echo $a+$b-$b; ?>">
    <br>
    <input type="submit" value="Submit" style="margin-top: 15px;">
    </form>
    
</body>
</html>