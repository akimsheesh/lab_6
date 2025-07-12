<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
    function calculateArea($width, $height) {
        return $width * $height;
    }
    
    $width = 18;
    $height = 20;
    $area = calculateArea($width, $height);
    
    echo "The area of a rectangle with a width of $width and height of $height is $area";
    ?>
</body>
</html>