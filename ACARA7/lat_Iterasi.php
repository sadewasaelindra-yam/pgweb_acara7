<?php
    /*
    $i = 1;
    while ($i <= 1) {
        echo $i;
        $i = $i + 1; // $i++;
    }
    */

    /*
    for($i = 1; $i <100; $i++) {
        echo $i."<br>";
    }
    */

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

    for($i=0; $i<=3; $i++) {
        echo $colors[$i]."<br>";
    }
?>