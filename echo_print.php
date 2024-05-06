<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $first_print1 = "Learn Core PHP With Echo";
        $first_print = "Learn Core PHP With print";
        $second_print = "https://github.com/dev-salman-khan/core_php";
        $add_one = 5;
        $add_two = 8;
        # Getting Out put By Print function
        print "<h2>" . $first_print . "</h2>";
        print "Study PHP at " . $second_print . "<br>";
        print $add_one + $add_two;
        # Getting Out put By Echo
        echo "<h2>" . $first_print1 . "</h2>";
        echo "Study PHP at " . $second_print . "<br>";
        echo $add_one + $add_two;
    ?>
</body>
</html>