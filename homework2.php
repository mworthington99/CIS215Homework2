<!DOCTYPE html>
<head>
    <title>My first PHP Site</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
    date_default_timezone_set("America/New_York");//sets timezone
    $time = date("H");//sets time to the hour in a 24 hour time format
    echo "The current time since the Unix epoch is : ";
    echo time();
    echo " The current time and date is: "; 
    echo date(" D M j G:i:s T Y");
    if ($time < 12) {
        echo " Good Morning!";
    } else if ($time >= 12 && $time < 17) {
        echo " Good Afternoon!";
    } else if ($time >= 17 && $time < 20) {
        echo " Good Evening!";
    } else {
        echo " Good Night!";
    }
?>
</body>
</html>