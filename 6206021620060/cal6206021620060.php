<?php
    $fruit = $_GET['fruit'];
    $width = $_GET['width'];
    if ($fruit == 1)
    { 
        echo "<img src=image/apple.png alt=apple width=$width>" ;
    }
    else if ($fruit ==2)
    {
        echo "<img src=image/orange.png width=$width>";
    }
    else if ($fruit ==3)
    {
        echo "<img src=image/star.jpg width=$width>";
    }
?>