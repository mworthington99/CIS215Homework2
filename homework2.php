<!DOCTYPE html>
    <head>
        <meta charset ="UTF=8">
        <title>My first PHP Website</title>
    </head>
    <body>
        <?php
            $time = date("H");//sets time to the hor in a 24 hour time format
            $timezone = date("e");//sets timezone
            echo "The current time since the Unix epoch is : " + time();
            echo "The current time and date is: " + date("D M j G:i:s T Y");
            if ($time < 12) {
                echo "Good Morning!";
            } else if ($time >= 12 || $time < 17) {
                echo "Good Afternoon!";
            } else if ($time >= 17 || $time < 20) {
                echo "Good Evening!";
            } else {
                echo "Good Night!";
            }
        ?>
    </body>        
</html>